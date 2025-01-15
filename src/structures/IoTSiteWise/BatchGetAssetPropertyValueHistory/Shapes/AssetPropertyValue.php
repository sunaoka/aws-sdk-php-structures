<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyValueHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Variant $value
 * @property TimeInNanos $timestamp
 * @property 'GOOD'|'BAD'|'UNCERTAIN'|null $quality
 */
class AssetPropertyValue extends Shape
{
    /**
     * @param array{
     *     value: Variant,
     *     timestamp: TimeInNanos,
     *     quality?: 'GOOD'|'BAD'|'UNCERTAIN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
