<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableInstanceSqlHaStandbyDetections;

trait EnableInstanceSqlHaStandbyDetectionsTrait
{
    /**
     * @param EnableInstanceSqlHaStandbyDetectionsRequest $args
     * @return EnableInstanceSqlHaStandbyDetectionsResponse
     */
    public function enableInstanceSqlHaStandbyDetections(EnableInstanceSqlHaStandbyDetectionsRequest $args)
    {
        $result = parent::enableInstanceSqlHaStandbyDetections($args->toArray());
        return new EnableInstanceSqlHaStandbyDetectionsResponse($result->toArray());
    }
}
