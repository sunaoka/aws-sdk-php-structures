<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateDataTableAttribute;

trait UpdateDataTableAttributeTrait
{
    /**
     * @param UpdateDataTableAttributeRequest $args
     * @return UpdateDataTableAttributeResponse
     */
    public function updateDataTableAttribute(UpdateDataTableAttributeRequest $args)
    {
        $result = parent::updateDataTableAttribute($args->toArray());
        return new UpdateDataTableAttributeResponse($result->toArray());
    }
}
