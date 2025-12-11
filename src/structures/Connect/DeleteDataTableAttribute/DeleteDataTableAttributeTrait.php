<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteDataTableAttribute;

trait DeleteDataTableAttributeTrait
{
    /**
     * @param DeleteDataTableAttributeRequest $args
     * @return DeleteDataTableAttributeResponse
     */
    public function deleteDataTableAttribute(DeleteDataTableAttributeRequest $args)
    {
        $result = parent::deleteDataTableAttribute($args->toArray());
        return new DeleteDataTableAttributeResponse($result->toArray());
    }
}
