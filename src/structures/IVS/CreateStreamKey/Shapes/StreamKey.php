<?php

namespace Sunaoka\Aws\Structures\IVS\CreateStreamKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $channelArn
 * @property array<string, string> $tags
 * @property string $value
 */
class StreamKey extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     channelArn?: string,
     *     tags?: array<string, string>,
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
