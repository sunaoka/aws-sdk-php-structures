<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreamKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $channelArn
 * @property array<string, string>|null $tags
 */
class StreamKeySummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     channelArn?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
