<?php

declare(strict_types=1);

namespace WP2D\Dependencies\League\HTMLToMarkdown;

interface PreConverterInterface
{
    public function preConvert(ElementInterface $element): void;
}
