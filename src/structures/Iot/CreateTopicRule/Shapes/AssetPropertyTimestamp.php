<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timeInSeconds
 * @property string $offsetInNanos
 */
class AssetPropertyTimestamp extends Shape
{
    /**
     * @param array{
     *     timeInSeconds: string,
     *     offsetInNanos?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
