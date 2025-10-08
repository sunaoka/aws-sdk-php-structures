<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateInstanceAttribute;

trait UpdateInstanceAttributeTrait
{
    /**
     * @param UpdateInstanceAttributeRequest $args
     * @return void
     */
    public function updateInstanceAttribute(UpdateInstanceAttributeRequest $args)
    {
        parent::updateInstanceAttribute($args->toArray());
    }
}
