<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StorageMaximumSize $maximumSize
 * @property string $storageLocation
 * @property StorageMinimumTimeToLive $minimumTimeToLive
 */
class DataPartitionStorageOptions extends Shape
{
    /**
     * @param array{
     *     maximumSize: StorageMaximumSize,
     *     storageLocation: string,
     *     minimumTimeToLive: StorageMinimumTimeToLive
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
