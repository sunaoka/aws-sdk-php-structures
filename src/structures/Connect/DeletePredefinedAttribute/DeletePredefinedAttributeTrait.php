<?php

namespace Sunaoka\Aws\Structures\Connect\DeletePredefinedAttribute;

trait DeletePredefinedAttributeTrait
{
    /**
     * @param DeletePredefinedAttributeRequest $args
     * @return void
     */
    public function deletePredefinedAttribute(DeletePredefinedAttributeRequest $args)
    {
        parent::deletePredefinedAttribute($args->toArray());
    }
}
