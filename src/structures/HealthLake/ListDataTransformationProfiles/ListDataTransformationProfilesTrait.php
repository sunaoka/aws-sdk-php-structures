<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListDataTransformationProfiles;

trait ListDataTransformationProfilesTrait
{
    /**
     * @param ListDataTransformationProfilesRequest $args
     * @return ListDataTransformationProfilesResponse
     */
    public function listDataTransformationProfiles(ListDataTransformationProfilesRequest $args)
    {
        $result = parent::listDataTransformationProfiles($args->toArray());
        return new ListDataTransformationProfilesResponse($result->toArray());
    }
}
