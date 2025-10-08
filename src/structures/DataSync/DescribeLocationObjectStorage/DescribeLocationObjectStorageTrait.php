<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationObjectStorage;

trait DescribeLocationObjectStorageTrait
{
    /**
     * @param DescribeLocationObjectStorageRequest $args
     * @return DescribeLocationObjectStorageResponse
     */
    public function describeLocationObjectStorage(DescribeLocationObjectStorageRequest $args)
    {
        $result = parent::describeLocationObjectStorage($args->toArray());
        return new DescribeLocationObjectStorageResponse($result->toArray());
    }
}
