<?php

namespace Sunaoka\Aws\Structures\AutoScaling\SetInstanceHealth;

trait SetInstanceHealthTrait
{
    /**
     * @param SetInstanceHealthRequest $args
     * @return void
     */
    public function setInstanceHealth(SetInstanceHealthRequest $args)
    {
        parent::setInstanceHealth($args->toArray());
    }
}
