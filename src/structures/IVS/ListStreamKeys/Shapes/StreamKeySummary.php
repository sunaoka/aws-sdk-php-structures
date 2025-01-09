<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreamKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $channelArn
 * @property array<string, string> $tags
 */
class StreamKeySummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     channelArn?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
