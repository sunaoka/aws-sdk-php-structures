<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateGlueIdentityCenterConfiguration;

trait UpdateGlueIdentityCenterConfigurationTrait
{
    /**
     * @param UpdateGlueIdentityCenterConfigurationRequest $args
     * @return UpdateGlueIdentityCenterConfigurationResponse
     */
    public function updateGlueIdentityCenterConfiguration(UpdateGlueIdentityCenterConfigurationRequest $args)
    {
        $result = parent::updateGlueIdentityCenterConfiguration($args->toArray());
        return new UpdateGlueIdentityCenterConfigurationResponse($result->toArray());
    }
}
