<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetOnPremisesInstances;

trait BatchGetOnPremisesInstancesTrait
{
    /**
     * @param BatchGetOnPremisesInstancesRequest $args
     * @return BatchGetOnPremisesInstancesResponse
     */
    public function batchGetOnPremisesInstances(BatchGetOnPremisesInstancesRequest $args)
    {
        $result = parent::batchGetOnPremisesInstances($args->toArray());
        return new BatchGetOnPremisesInstancesResponse($result->toArray());
    }
}
