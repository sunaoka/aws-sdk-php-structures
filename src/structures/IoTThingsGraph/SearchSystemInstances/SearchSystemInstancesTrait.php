<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchSystemInstances;

trait SearchSystemInstancesTrait
{
    /**
     * @param SearchSystemInstancesRequest $args
     * @return SearchSystemInstancesResponse
     */
    public function searchSystemInstances(SearchSystemInstancesRequest $args)
    {
        $result = parent::searchSystemInstances($args->toArray());
        return new SearchSystemInstancesResponse($result->toArray());
    }
}
