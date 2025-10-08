<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteProfileObject;

trait DeleteProfileObjectTrait
{
    /**
     * @param DeleteProfileObjectRequest $args
     * @return DeleteProfileObjectResponse
     */
    public function deleteProfileObject(DeleteProfileObjectRequest $args)
    {
        $result = parent::deleteProfileObject($args->toArray());
        return new DeleteProfileObjectResponse($result->toArray());
    }
}
