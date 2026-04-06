<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystem;

trait DescribeStorageSystemTrait
{
    /**
     * @param DescribeStorageSystemRequest $args
     * @return DescribeStorageSystemResponse
     */
    public function describeStorageSystem(DescribeStorageSystemRequest $args)
    {
        $result = parent::describeStorageSystem($args->toArray());
        return new DescribeStorageSystemResponse($result->toArray());
    }
}
