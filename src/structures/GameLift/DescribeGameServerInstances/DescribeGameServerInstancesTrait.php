<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameServerInstances;

trait DescribeGameServerInstancesTrait
{
    /**
     * @param DescribeGameServerInstancesRequest $args
     * @return DescribeGameServerInstancesResponse
     */
    public function describeGameServerInstances(DescribeGameServerInstancesRequest $args)
    {
        $result = parent::describeGameServerInstances($args->toArray());
        return new DescribeGameServerInstancesResponse($result->toArray());
    }
}
