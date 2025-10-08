<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListDatasetGroups;

trait ListDatasetGroupsTrait
{
    /**
     * @param ListDatasetGroupsRequest $args
     * @return ListDatasetGroupsResponse
     */
    public function listDatasetGroups(ListDatasetGroupsRequest $args)
    {
        $result = parent::listDatasetGroups($args->toArray());
        return new ListDatasetGroupsResponse($result->toArray());
    }
}
