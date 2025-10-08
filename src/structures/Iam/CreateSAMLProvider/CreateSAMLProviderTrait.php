<?php

namespace Sunaoka\Aws\Structures\Iam\CreateSAMLProvider;

trait CreateSAMLProviderTrait
{
    /**
     * @param CreateSAMLProviderRequest $args
     * @return CreateSAMLProviderResponse
     */
    public function createSAMLProvider(CreateSAMLProviderRequest $args)
    {
        $result = parent::createSAMLProvider($args->toArray());
        return new CreateSAMLProviderResponse($result->toArray());
    }
}
