<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteGlueIdentityCenterConfiguration;

trait DeleteGlueIdentityCenterConfigurationTrait
{
    /**
     * @param DeleteGlueIdentityCenterConfigurationRequest $args
     * @return DeleteGlueIdentityCenterConfigurationResponse
     */
    public function deleteGlueIdentityCenterConfiguration(DeleteGlueIdentityCenterConfigurationRequest $args)
    {
        $result = parent::deleteGlueIdentityCenterConfiguration($args->toArray());
        return new DeleteGlueIdentityCenterConfigurationResponse($result->toArray());
    }
}
