<?php

namespace Sunaoka\Aws\Structures\IVS\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $value
 * @property string|null $channelArn
 * @property array<string, string>|null $tags
 */
class StreamKey extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     value?: string|null,
     *     channelArn?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
