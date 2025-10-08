<?php

namespace Sunaoka\Aws\Structures\LakeFormation\StartQueryPlanning;

trait StartQueryPlanningTrait
{
    /**
     * @param StartQueryPlanningRequest $args
     * @return StartQueryPlanningResponse
     */
    public function startQueryPlanning(StartQueryPlanningRequest $args)
    {
        $result = parent::startQueryPlanning($args->toArray());
        return new StartQueryPlanningResponse($result->toArray());
    }
}
