<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteProfileObjectType;

trait DeleteProfileObjectTypeTrait
{
    /**
     * @param DeleteProfileObjectTypeRequest $args
     * @return DeleteProfileObjectTypeResponse
     */
    public function deleteProfileObjectType(DeleteProfileObjectTypeRequest $args)
    {
        $result = parent::deleteProfileObjectType($args->toArray());
        return new DeleteProfileObjectTypeResponse($result->toArray());
    }
}
