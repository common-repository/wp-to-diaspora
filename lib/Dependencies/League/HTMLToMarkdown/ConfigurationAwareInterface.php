<?php

declare(strict_types=1);

namespace WP2D\Dependencies\League\HTMLToMarkdown;

interface ConfigurationAwareInterface
{
    public function setConfig(Configuration $config): void;
}
