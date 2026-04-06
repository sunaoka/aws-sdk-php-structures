<?php

namespace Sunaoka\Aws\Structures\Glue\CreateGlueIdentityCenterConfiguration;

trait CreateGlueIdentityCenterConfigurationTrait
{
    /**
     * @param CreateGlueIdentityCenterConfigurationRequest $args
     * @return CreateGlueIdentityCenterConfigurationResponse
     */
    public function createGlueIdentityCenterConfiguration(CreateGlueIdentityCenterConfigurationRequest $args)
    {
        $result = parent::createGlueIdentityCenterConfiguration($args->toArray());
        return new CreateGlueIdentityCenterConfigurationResponse($result->toArray());
    }
}
