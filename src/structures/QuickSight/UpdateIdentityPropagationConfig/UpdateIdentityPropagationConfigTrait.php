<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateIdentityPropagationConfig;

trait UpdateIdentityPropagationConfigTrait
{
    /**
     * @param UpdateIdentityPropagationConfigRequest $args
     * @return UpdateIdentityPropagationConfigResponse
     */
    public function updateIdentityPropagationConfig(UpdateIdentityPropagationConfigRequest $args)
    {
        $result = parent::updateIdentityPropagationConfig($args->toArray());
        return new UpdateIdentityPropagationConfigResponse($result->toArray());
    }
}
