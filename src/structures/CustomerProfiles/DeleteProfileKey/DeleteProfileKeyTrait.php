<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteProfileKey;

trait DeleteProfileKeyTrait
{
    /**
     * @param DeleteProfileKeyRequest $args
     * @return DeleteProfileKeyResponse
     */
    public function deleteProfileKey(DeleteProfileKeyRequest $args)
    {
        $result = parent::deleteProfileKey($args->toArray());
        return new DeleteProfileKeyResponse($result->toArray());
    }
}
