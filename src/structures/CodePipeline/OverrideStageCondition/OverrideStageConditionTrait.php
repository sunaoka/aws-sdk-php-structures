<?php

namespace Sunaoka\Aws\Structures\CodePipeline\OverrideStageCondition;

trait OverrideStageConditionTrait
{
    /**
     * @param OverrideStageConditionRequest $args
     * @return void
     */
    public function overrideStageCondition(OverrideStageConditionRequest $args)
    {
        parent::overrideStageCondition($args->toArray());
    }
}
