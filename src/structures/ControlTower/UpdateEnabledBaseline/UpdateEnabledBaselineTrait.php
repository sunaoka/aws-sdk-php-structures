<?php

namespace Sunaoka\Aws\Structures\ControlTower\UpdateEnabledBaseline;

trait UpdateEnabledBaselineTrait
{
    /**
     * @param UpdateEnabledBaselineRequest $args
     * @return UpdateEnabledBaselineResponse
     */
    public function updateEnabledBaseline(UpdateEnabledBaselineRequest $args)
    {
        $result = parent::updateEnabledBaseline($args->toArray());
        return new UpdateEnabledBaselineResponse($result->toArray());
    }
}
