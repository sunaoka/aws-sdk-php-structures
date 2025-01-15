<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetPropertyVariant|null $value
 * @property AssetPropertyTimestamp|null $timestamp
 * @property string|null $quality
 */
class AssetPropertyValue extends Shape
{
    /**
     * @param array{
     *     value?: AssetPropertyVariant|null,
     *     timestamp?: AssetPropertyTimestamp|null,
     *     quality?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
