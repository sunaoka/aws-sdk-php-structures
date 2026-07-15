<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListDataTransformationProfileVersions;

trait ListDataTransformationProfileVersionsTrait
{
    /**
     * @param ListDataTransformationProfileVersionsRequest $args
     * @return ListDataTransformationProfileVersionsResponse
     */
    public function listDataTransformationProfileVersions(ListDataTransformationProfileVersionsRequest $args)
    {
        $result = parent::listDataTransformationProfileVersions($args->toArray());
        return new ListDataTransformationProfileVersionsResponse($result->toArray());
    }
}
