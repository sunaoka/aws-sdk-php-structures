<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateSecurityConfig;

trait UpdateSecurityConfigTrait
{
    /**
     * @param UpdateSecurityConfigRequest $args
     * @return UpdateSecurityConfigResponse
     */
    public function updateSecurityConfig(UpdateSecurityConfigRequest $args)
    {
        $result = parent::updateSecurityConfig($args->toArray());
        return new UpdateSecurityConfigResponse($result->toArray());
    }
}
