<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeWebSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $publishedAfter
 * @property \Aws\Api\DateTimeResult|null $publishedBefore
 */
class PublishedDateFilter extends Shape
{
    /**
     * @param array{
     *     publishedAfter?: \Aws\Api\DateTimeResult|null,
     *     publishedBefore?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
