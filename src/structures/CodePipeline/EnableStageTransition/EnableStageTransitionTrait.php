<?php

namespace Sunaoka\Aws\Structures\CodePipeline\EnableStageTransition;

trait EnableStageTransitionTrait
{
    /**
     * @param EnableStageTransitionRequest $args
     * @return void
     */
    public function enableStageTransition(EnableStageTransitionRequest $args)
    {
        parent::enableStageTransition($args->toArray());
    }
}
