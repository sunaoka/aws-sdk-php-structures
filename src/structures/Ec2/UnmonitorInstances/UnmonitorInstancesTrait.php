<?php

namespace Sunaoka\Aws\Structures\Ec2\UnmonitorInstances;

trait UnmonitorInstancesTrait
{
    /**
     * @param UnmonitorInstancesRequest $args
     * @return UnmonitorInstancesResponse
     */
    public function unmonitorInstances(UnmonitorInstancesRequest $args)
    {
        $result = parent::unmonitorInstances($args->toArray());
        return new UnmonitorInstancesResponse($result->toArray());
    }
}
