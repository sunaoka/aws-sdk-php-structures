<?php

namespace Sunaoka\Aws\Structures\ControlTower\ResetEnabledBaseline;

trait ResetEnabledBaselineTrait
{
    /**
     * @param ResetEnabledBaselineRequest $args
     * @return ResetEnabledBaselineResponse
     */
    public function resetEnabledBaseline(ResetEnabledBaselineRequest $args)
    {
        $result = parent::resetEnabledBaseline($args->toArray());
        return new ResetEnabledBaselineResponse($result->toArray());
    }
}
