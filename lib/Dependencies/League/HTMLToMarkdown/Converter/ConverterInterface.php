<?php

declare(strict_types=1);

namespace WP2D\Dependencies\League\HTMLToMarkdown\Converter;

use WP2D\Dependencies\League\HTMLToMarkdown\ElementInterface;

interface ConverterInterface
{
    public function convert(ElementInterface $element): string;

    /**
     * @return string[]
     */
    public function getSupportedTags(): array;
}
