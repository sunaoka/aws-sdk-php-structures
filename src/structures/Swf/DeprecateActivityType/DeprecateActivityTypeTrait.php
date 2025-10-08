<?php

namespace Sunaoka\Aws\Structures\Swf\DeprecateActivityType;

trait DeprecateActivityTypeTrait
{
    /**
     * @param DeprecateActivityTypeRequest $args
     * @return void
     */
    public function deprecateActivityType(DeprecateActivityTypeRequest $args)
    {
        parent::deprecateActivityType($args->toArray());
    }
}
