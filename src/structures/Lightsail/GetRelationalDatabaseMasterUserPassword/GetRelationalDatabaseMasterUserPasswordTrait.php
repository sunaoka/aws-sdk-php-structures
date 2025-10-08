<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseMasterUserPassword;

trait GetRelationalDatabaseMasterUserPasswordTrait
{
    /**
     * @param GetRelationalDatabaseMasterUserPasswordRequest $args
     * @return GetRelationalDatabaseMasterUserPasswordResponse
     */
    public function getRelationalDatabaseMasterUserPassword(GetRelationalDatabaseMasterUserPasswordRequest $args)
    {
        $result = parent::getRelationalDatabaseMasterUserPassword($args->toArray());
        return new GetRelationalDatabaseMasterUserPasswordResponse($result->toArray());
    }
}
