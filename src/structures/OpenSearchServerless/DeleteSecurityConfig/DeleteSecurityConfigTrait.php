<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteSecurityConfig;

trait DeleteSecurityConfigTrait
{
    /**
     * @param DeleteSecurityConfigRequest $args
     * @return DeleteSecurityConfigResponse
     */
    public function deleteSecurityConfig(DeleteSecurityConfigRequest $args)
    {
        $result = parent::deleteSecurityConfig($args->toArray());
        return new DeleteSecurityConfigResponse($result->toArray());
    }
}
