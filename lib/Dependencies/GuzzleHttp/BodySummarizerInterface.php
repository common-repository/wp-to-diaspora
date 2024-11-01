<?php

namespace WP2D\Dependencies\GuzzleHttp;

use WP2D\Dependencies\Psr\Http\Message\MessageInterface;

interface BodySummarizerInterface
{
    /**
     * Returns a summarized message body.
     */
    public function summarize(MessageInterface $message): ?string;
}
