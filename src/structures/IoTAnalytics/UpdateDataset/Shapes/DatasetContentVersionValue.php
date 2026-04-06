<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetName
 */
class DatasetContentVersionValue extends Shape
{
    /**
     * @param array{datasetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
