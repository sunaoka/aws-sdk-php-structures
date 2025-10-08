<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeWorkingStorage;

trait DescribeWorkingStorageTrait
{
    /**
     * @param DescribeWorkingStorageRequest $args
     * @return DescribeWorkingStorageResponse
     */
    public function describeWorkingStorage(DescribeWorkingStorageRequest $args)
    {
        $result = parent::describeWorkingStorage($args->toArray());
        return new DescribeWorkingStorageResponse($result->toArray());
    }
}
