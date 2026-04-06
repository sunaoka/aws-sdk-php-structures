<?php

namespace Sunaoka\Aws\Structures\OpsWorks\SetLoadBasedAutoScaling;

trait SetLoadBasedAutoScalingTrait
{
    /**
     * @param SetLoadBasedAutoScalingRequest $args
     * @return void
     */
    public function setLoadBasedAutoScaling(SetLoadBasedAutoScalingRequest $args)
    {
        parent::setLoadBasedAutoScaling($args->toArray());
    }
}
