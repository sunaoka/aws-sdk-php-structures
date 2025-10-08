<?php

namespace Sunaoka\Aws\Structures\AutoScaling\SetDesiredCapacity;

trait SetDesiredCapacityTrait
{
    /**
     * @param SetDesiredCapacityRequest $args
     * @return void
     */
    public function setDesiredCapacity(SetDesiredCapacityRequest $args)
    {
        parent::setDesiredCapacity($args->toArray());
    }
}
