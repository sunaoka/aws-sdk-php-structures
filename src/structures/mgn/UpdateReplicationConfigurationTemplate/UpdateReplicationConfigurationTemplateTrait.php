<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateReplicationConfigurationTemplate;

trait UpdateReplicationConfigurationTemplateTrait
{
    /**
     * @param UpdateReplicationConfigurationTemplateRequest $args
     * @return UpdateReplicationConfigurationTemplateResponse
     */
    public function updateReplicationConfigurationTemplate(UpdateReplicationConfigurationTemplateRequest $args)
    {
        $result = parent::updateReplicationConfigurationTemplate($args->toArray());
        return new UpdateReplicationConfigurationTemplateResponse($result->toArray());
    }
}
