<?php

namespace Sunaoka\Aws\Structures\Detective\UpdateInvestigationState;

trait UpdateInvestigationStateTrait
{
    /**
     * @param UpdateInvestigationStateRequest $args
     * @return void
     */
    public function updateInvestigationState(UpdateInvestigationStateRequest $args)
    {
        parent::updateInvestigationState($args->toArray());
    }
}
