<?php

namespace Sunaoka\Aws\Structures\Iam\GetSAMLProvider;

trait GetSAMLProviderTrait
{
    /**
     * @param GetSAMLProviderRequest $args
     * @return GetSAMLProviderResponse
     */
    public function getSAMLProvider(GetSAMLProviderRequest $args)
    {
        $result = parent::getSAMLProvider($args->toArray());
        return new GetSAMLProviderResponse($result->toArray());
    }
}
