<?php

namespace Sunaoka\Aws\Structures\Emr\SetKeepJobFlowAliveWhenNoSteps;

trait SetKeepJobFlowAliveWhenNoStepsTrait
{
    /**
     * @param SetKeepJobFlowAliveWhenNoStepsRequest $args
     * @return void
     */
    public function setKeepJobFlowAliveWhenNoSteps(SetKeepJobFlowAliveWhenNoStepsRequest $args)
    {
        parent::setKeepJobFlowAliveWhenNoSteps($args->toArray());
    }
}
