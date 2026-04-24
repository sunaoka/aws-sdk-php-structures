<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateAttachedFilesConfiguration;

trait UpdateAttachedFilesConfigurationTrait
{
    /**
     * @param UpdateAttachedFilesConfigurationRequest $args
     * @return UpdateAttachedFilesConfigurationResponse
     */
    public function updateAttachedFilesConfiguration(UpdateAttachedFilesConfigurationRequest $args)
    {
        $result = parent::updateAttachedFilesConfiguration($args->toArray());
        return new UpdateAttachedFilesConfigurationResponse($result->toArray());
    }
}
