<?php

namespace Sunaoka\Aws\Structures\CloudFormation\UpdateStackInstances;

trait UpdateStackInstancesTrait
{
    /**
     * @param UpdateStackInstancesRequest $args
     * @return UpdateStackInstancesResponse
     */
    public function updateStackInstances(UpdateStackInstancesRequest $args)
    {
        $result = parent::updateStackInstances($args->toArray());
        return new UpdateStackInstancesResponse($result->toArray());
    }
}
