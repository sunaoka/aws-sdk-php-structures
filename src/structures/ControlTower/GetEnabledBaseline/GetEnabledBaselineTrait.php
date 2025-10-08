<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetEnabledBaseline;

trait GetEnabledBaselineTrait
{
    /**
     * @param GetEnabledBaselineRequest $args
     * @return GetEnabledBaselineResponse
     */
    public function getEnabledBaseline(GetEnabledBaselineRequest $args)
    {
        $result = parent::getEnabledBaseline($args->toArray());
        return new GetEnabledBaselineResponse($result->toArray());
    }
}
