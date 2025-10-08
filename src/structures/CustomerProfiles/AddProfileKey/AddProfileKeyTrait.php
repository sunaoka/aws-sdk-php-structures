<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\AddProfileKey;

trait AddProfileKeyTrait
{
    /**
     * @param AddProfileKeyRequest $args
     * @return AddProfileKeyResponse
     */
    public function addProfileKey(AddProfileKeyRequest $args)
    {
        $result = parent::addProfileKey($args->toArray());
        return new AddProfileKeyResponse($result->toArray());
    }
}
