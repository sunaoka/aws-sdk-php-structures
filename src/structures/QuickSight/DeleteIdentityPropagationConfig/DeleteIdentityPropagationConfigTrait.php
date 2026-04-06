<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteIdentityPropagationConfig;

trait DeleteIdentityPropagationConfigTrait
{
    /**
     * @param DeleteIdentityPropagationConfigRequest $args
     * @return DeleteIdentityPropagationConfigResponse
     */
    public function deleteIdentityPropagationConfig(DeleteIdentityPropagationConfigRequest $args)
    {
        $result = parent::deleteIdentityPropagationConfig($args->toArray());
        return new DeleteIdentityPropagationConfigResponse($result->toArray());
    }
}
