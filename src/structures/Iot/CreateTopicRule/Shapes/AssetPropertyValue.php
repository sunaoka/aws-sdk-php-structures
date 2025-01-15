<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetPropertyVariant $value
 * @property AssetPropertyTimestamp $timestamp
 * @property string|null $quality
 */
class AssetPropertyValue extends Shape
{
    /**
     * @param array{
     *     value: AssetPropertyVariant,
     *     timestamp: AssetPropertyTimestamp,
     *     quality?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
