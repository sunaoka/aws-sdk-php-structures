<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\GetDatasetContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryName
 * @property string $dataURI
 */
class DatasetEntry extends Shape
{
    /**
     * @param array{
     *     entryName?: string,
     *     dataURI?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
