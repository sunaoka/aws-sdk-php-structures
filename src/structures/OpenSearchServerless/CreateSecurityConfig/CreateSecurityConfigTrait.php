<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateSecurityConfig;

trait CreateSecurityConfigTrait
{
    /**
     * @param CreateSecurityConfigRequest $args
     * @return CreateSecurityConfigResponse
     */
    public function createSecurityConfig(CreateSecurityConfigRequest $args)
    {
        $result = parent::createSecurityConfig($args->toArray());
        return new CreateSecurityConfigResponse($result->toArray());
    }
}
