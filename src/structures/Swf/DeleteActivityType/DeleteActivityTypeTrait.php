<?php

namespace Sunaoka\Aws\Structures\Swf\DeleteActivityType;

trait DeleteActivityTypeTrait
{
    /**
     * @param DeleteActivityTypeRequest $args
     * @return void
     */
    public function deleteActivityType(DeleteActivityTypeRequest $args)
    {
        parent::deleteActivityType($args->toArray());
    }
}
