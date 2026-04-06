<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateOperatorAppIdpConfig;

trait UpdateOperatorAppIdpConfigTrait
{
    /**
     * @param UpdateOperatorAppIdpConfigRequest $args
     * @return UpdateOperatorAppIdpConfigResponse
     */
    public function updateOperatorAppIdpConfig(UpdateOperatorAppIdpConfigRequest $args)
    {
        $result = parent::updateOperatorAppIdpConfig($args->toArray());
        return new UpdateOperatorAppIdpConfigResponse($result->toArray());
    }
}
