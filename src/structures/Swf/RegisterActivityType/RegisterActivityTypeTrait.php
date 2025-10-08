<?php

namespace Sunaoka\Aws\Structures\Swf\RegisterActivityType;

trait RegisterActivityTypeTrait
{
    /**
     * @param RegisterActivityTypeRequest $args
     * @return void
     */
    public function registerActivityType(RegisterActivityTypeRequest $args)
    {
        parent::registerActivityType($args->toArray());
    }
}
