<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetBaseline;

trait GetBaselineTrait
{
    /**
     * @param GetBaselineRequest $args
     * @return GetBaselineResponse
     */
    public function getBaseline(GetBaselineRequest $args)
    {
        $result = parent::getBaseline($args->toArray());
        return new GetBaselineResponse($result->toArray());
    }
}
