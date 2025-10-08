<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetSecurityConfig;

trait GetSecurityConfigTrait
{
    /**
     * @param GetSecurityConfigRequest $args
     * @return GetSecurityConfigResponse
     */
    public function getSecurityConfig(GetSecurityConfigRequest $args)
    {
        $result = parent::getSecurityConfig($args->toArray());
        return new GetSecurityConfigResponse($result->toArray());
    }
}
