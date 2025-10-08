<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateSAMLProvider;

trait UpdateSAMLProviderTrait
{
    /**
     * @param UpdateSAMLProviderRequest $args
     * @return UpdateSAMLProviderResponse
     */
    public function updateSAMLProvider(UpdateSAMLProviderRequest $args)
    {
        $result = parent::updateSAMLProvider($args->toArray());
        return new UpdateSAMLProviderResponse($result->toArray());
    }
}
