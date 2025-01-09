<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Variant $value
 * @property TimeInNanos $timestamp
 * @property 'GOOD'|'BAD'|'UNCERTAIN' $quality
 */
class AssetPropertyValue extends Shape
{
    /**
     * @param array{
     *     value: Variant,
     *     timestamp: TimeInNanos,
     *     quality?: 'GOOD'|'BAD'|'UNCERTAIN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
