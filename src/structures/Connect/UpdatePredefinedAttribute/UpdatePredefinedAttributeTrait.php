<?php

namespace Sunaoka\Aws\Structures\Connect\UpdatePredefinedAttribute;

trait UpdatePredefinedAttributeTrait
{
    /**
     * @param UpdatePredefinedAttributeRequest $args
     * @return void
     */
    public function updatePredefinedAttribute(UpdatePredefinedAttributeRequest $args)
    {
        parent::updatePredefinedAttribute($args->toArray());
    }
}
