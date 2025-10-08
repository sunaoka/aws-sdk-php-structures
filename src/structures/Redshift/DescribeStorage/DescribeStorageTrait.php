<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeStorage;

trait DescribeStorageTrait
{
    /**
     * @return DescribeStorageResponse
     */
    public function describeStorage()
    {
        $result = parent::describeStorage();
        return new DescribeStorageResponse($result->toArray());
    }
}
