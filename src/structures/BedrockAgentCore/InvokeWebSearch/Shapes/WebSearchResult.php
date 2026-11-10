<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeWebSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $title
 * @property string|null $url
 * @property string $text
 * @property \Aws\Api\DateTimeResult|null $publishedAt
 */
class WebSearchResult extends Shape
{
    /**
     * @param array{
     *     title?: string|null,
     *     url?: string|null,
     *     text: string,
     *     publishedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
