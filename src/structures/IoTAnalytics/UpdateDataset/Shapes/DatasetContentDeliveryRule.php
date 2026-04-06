<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $entryName
 * @property DatasetContentDeliveryDestination $destination
 */
class DatasetContentDeliveryRule extends Shape
{
    /**
     * @param array{
     *     entryName?: string|null,
     *     destination: DatasetContentDeliveryDestination
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
