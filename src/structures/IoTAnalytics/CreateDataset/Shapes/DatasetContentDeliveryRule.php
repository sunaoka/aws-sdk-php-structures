<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryName
 * @property DatasetContentDeliveryDestination $destination
 */
class DatasetContentDeliveryRule extends Shape
{
    /**
     * @param array{
     *     entryName?: string,
     *     destination: DatasetContentDeliveryDestination
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
