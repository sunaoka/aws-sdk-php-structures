<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteCustomEntityType;

trait DeleteCustomEntityTypeTrait
{
    /**
     * @param DeleteCustomEntityTypeRequest $args
     * @return DeleteCustomEntityTypeResponse
     */
    public function deleteCustomEntityType(DeleteCustomEntityTypeRequest $args)
    {
        $result = parent::deleteCustomEntityType($args->toArray());
        return new DeleteCustomEntityTypeResponse($result->toArray());
    }
}
