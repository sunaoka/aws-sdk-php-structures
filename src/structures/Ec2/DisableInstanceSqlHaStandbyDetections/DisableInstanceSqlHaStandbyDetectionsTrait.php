<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableInstanceSqlHaStandbyDetections;

trait DisableInstanceSqlHaStandbyDetectionsTrait
{
    /**
     * @param DisableInstanceSqlHaStandbyDetectionsRequest $args
     * @return DisableInstanceSqlHaStandbyDetectionsResponse
     */
    public function disableInstanceSqlHaStandbyDetections(DisableInstanceSqlHaStandbyDetectionsRequest $args)
    {
        $result = parent::disableInstanceSqlHaStandbyDetections($args->toArray());
        return new DisableInstanceSqlHaStandbyDetectionsResponse($result->toArray());
    }
}
