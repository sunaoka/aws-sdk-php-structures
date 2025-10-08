<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLineageGroups;

trait ListLineageGroupsTrait
{
    /**
     * @param ListLineageGroupsRequest $args
     * @return ListLineageGroupsResponse
     */
    public function listLineageGroups(ListLineageGroupsRequest $args)
    {
        $result = parent::listLineageGroups($args->toArray());
        return new ListLineageGroupsResponse($result->toArray());
    }
}
