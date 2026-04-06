<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\GetDatasetContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $entryName
 * @property string|null $dataURI
 */
class DatasetEntry extends Shape
{
    /**
     * @param array{
     *     entryName?: string|null,
     *     dataURI?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
