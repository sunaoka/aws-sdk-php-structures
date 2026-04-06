<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteIdentityCenterApplication;

trait DeleteIdentityCenterApplicationTrait
{
    /**
     * @param DeleteIdentityCenterApplicationRequest $args
     * @return DeleteIdentityCenterApplicationResponse
     */
    public function deleteIdentityCenterApplication(DeleteIdentityCenterApplicationRequest $args)
    {
        $result = parent::deleteIdentityCenterApplication($args->toArray());
        return new DeleteIdentityCenterApplicationResponse($result->toArray());
    }
}
