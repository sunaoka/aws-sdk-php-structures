<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListFeatureGroups;

trait ListFeatureGroupsTrait
{
    /**
     * @param ListFeatureGroupsRequest $args
     * @return ListFeatureGroupsResponse
     */
    public function listFeatureGroups(ListFeatureGroupsRequest $args)
    {
        $result = parent::listFeatureGroups($args->toArray());
        return new ListFeatureGroupsResponse($result->toArray());
    }
}
