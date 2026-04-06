<?php

namespace Sunaoka\Aws\Structures\OpsWorks\SetTimeBasedAutoScaling;

trait SetTimeBasedAutoScalingTrait
{
    /**
     * @param SetTimeBasedAutoScalingRequest $args
     * @return void
     */
    public function setTimeBasedAutoScaling(SetTimeBasedAutoScalingRequest $args)
    {
        parent::setTimeBasedAutoScaling($args->toArray());
    }
}
