<?php

namespace Sunaoka\Aws\Structures\CodePipeline\DisableStageTransition;

trait DisableStageTransitionTrait
{
    /**
     * @param DisableStageTransitionRequest $args
     * @return void
     */
    public function disableStageTransition(DisableStageTransitionRequest $args)
    {
        parent::disableStageTransition($args->toArray());
    }
}
