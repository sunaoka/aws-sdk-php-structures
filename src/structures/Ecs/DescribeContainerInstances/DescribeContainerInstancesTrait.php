<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeContainerInstances;

trait DescribeContainerInstancesTrait
{
    /**
     * @param DescribeContainerInstancesRequest $args
     * @return DescribeContainerInstancesResponse
     */
    public function describeContainerInstances(DescribeContainerInstancesRequest $args)
    {
        $result = parent::describeContainerInstances($args->toArray());
        return new DescribeContainerInstancesResponse($result->toArray());
    }
}
