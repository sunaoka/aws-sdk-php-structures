<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomalousLogGroups;

trait ListAnomalousLogGroupsTrait
{
    /**
     * @param ListAnomalousLogGroupsRequest $args
     * @return ListAnomalousLogGroupsResponse
     */
    public function listAnomalousLogGroups(ListAnomalousLogGroupsRequest $args)
    {
        $result = parent::listAnomalousLogGroups($args->toArray());
        return new ListAnomalousLogGroupsResponse($result->toArray());
    }
}
