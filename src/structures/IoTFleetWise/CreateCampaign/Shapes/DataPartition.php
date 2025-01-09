<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property DataPartitionStorageOptions $storageOptions
 * @property DataPartitionUploadOptions $uploadOptions
 */
class DataPartition extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     storageOptions: DataPartitionStorageOptions,
     *     uploadOptions?: DataPartitionUploadOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
