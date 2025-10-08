<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCloudFormationStackRecords;

trait GetCloudFormationStackRecordsTrait
{
    /**
     * @param GetCloudFormationStackRecordsRequest $args
     * @return GetCloudFormationStackRecordsResponse
     */
    public function getCloudFormationStackRecords(GetCloudFormationStackRecordsRequest $args)
    {
        $result = parent::getCloudFormationStackRecords($args->toArray());
        return new GetCloudFormationStackRecordsResponse($result->toArray());
    }
}
