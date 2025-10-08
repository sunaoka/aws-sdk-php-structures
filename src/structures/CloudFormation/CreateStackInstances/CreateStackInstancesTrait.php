<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateStackInstances;

trait CreateStackInstancesTrait
{
    /**
     * @param CreateStackInstancesRequest $args
     * @return CreateStackInstancesResponse
     */
    public function createStackInstances(CreateStackInstancesRequest $args)
    {
        $result = parent::createStackInstances($args->toArray());
        return new CreateStackInstancesResponse($result->toArray());
    }
}
