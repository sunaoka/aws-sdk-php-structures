<?php

namespace Sunaoka\Aws\Structures\Glue\GetGlueIdentityCenterConfiguration;

trait GetGlueIdentityCenterConfigurationTrait
{
    /**
     * @param GetGlueIdentityCenterConfigurationRequest $args
     * @return GetGlueIdentityCenterConfigurationResponse
     */
    public function getGlueIdentityCenterConfiguration(GetGlueIdentityCenterConfigurationRequest $args)
    {
        $result = parent::getGlueIdentityCenterConfiguration($args->toArray());
        return new GetGlueIdentityCenterConfigurationResponse($result->toArray());
    }
}
