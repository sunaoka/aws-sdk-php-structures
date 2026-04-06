<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetAnomalyGroup;

trait GetAnomalyGroupTrait
{
    /**
     * @param GetAnomalyGroupRequest $args
     * @return GetAnomalyGroupResponse
     */
    public function getAnomalyGroup(GetAnomalyGroupRequest $args)
    {
        $result = parent::getAnomalyGroup($args->toArray());
        return new GetAnomalyGroupResponse($result->toArray());
    }
}
