<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateCodeSigningConfig;

trait CreateCodeSigningConfigTrait
{
    /**
     * @param CreateCodeSigningConfigRequest $args
     * @return CreateCodeSigningConfigResponse
     */
    public function createCodeSigningConfig(CreateCodeSigningConfigRequest $args)
    {
        $result = parent::createCodeSigningConfig($args->toArray());
        return new CreateCodeSigningConfigResponse($result->toArray());
    }
}
