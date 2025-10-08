<?php

namespace Sunaoka\Aws\Structures\Swf\UndeprecateActivityType;

trait UndeprecateActivityTypeTrait
{
    /**
     * @param UndeprecateActivityTypeRequest $args
     * @return void
     */
    public function undeprecateActivityType(UndeprecateActivityTypeRequest $args)
    {
        parent::undeprecateActivityType($args->toArray());
    }
}
