<?php

namespace Sunaoka\Aws\Structures\Iot\ReplaceTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetPropertyVariant $value
 * @property AssetPropertyTimestamp $timestamp
 * @property string $quality
 */
class AssetPropertyValue extends Shape
{
    /**
     * @param array{
     *     value: AssetPropertyVariant,
     *     timestamp: AssetPropertyTimestamp,
     *     quality?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
