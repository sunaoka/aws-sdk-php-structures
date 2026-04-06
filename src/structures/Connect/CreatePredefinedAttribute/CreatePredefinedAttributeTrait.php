<?php

namespace Sunaoka\Aws\Structures\Connect\CreatePredefinedAttribute;

trait CreatePredefinedAttributeTrait
{
    /**
     * @param CreatePredefinedAttributeRequest $args
     * @return void
     */
    public function createPredefinedAttribute(CreatePredefinedAttributeRequest $args)
    {
        parent::createPredefinedAttribute($args->toArray());
    }
}
