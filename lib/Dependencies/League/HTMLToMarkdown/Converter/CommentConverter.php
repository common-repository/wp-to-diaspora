<?php

declare(strict_types=1);

namespace WP2D\Dependencies\League\HTMLToMarkdown\Converter;

use WP2D\Dependencies\League\HTMLToMarkdown\Configuration;
use WP2D\Dependencies\League\HTMLToMarkdown\ConfigurationAwareInterface;
use WP2D\Dependencies\League\HTMLToMarkdown\ElementInterface;

class CommentConverter implements ConverterInterface, ConfigurationAwareInterface
{
    /** @var Configuration */
    protected $config;

    public function setConfig(Configuration $config): void
    {
        $this->config = $config;
    }

    public function convert(ElementInterface $element): string
    {
        if ($this->shouldPreserve($element)) {
            return '<!--' . $element->getValue() . '-->';
        }

        return '';
    }

    /**
     * @return string[]
     */
    public function getSupportedTags(): array
    {
        return ['#comment'];
    }

    private function shouldPreserve(ElementInterface $element): bool
    {
        $preserve = $this->config->getOption('preserve_comments');
        if ($preserve === true) {
            return true;
        }

        if (\is_array($preserve)) {
            $value = \trim($element->getValue());

            return \in_array($value, $preserve, true);
        }

        return false;
    }
}
