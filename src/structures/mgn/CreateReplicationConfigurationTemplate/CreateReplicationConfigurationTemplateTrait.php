<?php

namespace Sunaoka\Aws\Structures\mgn\CreateReplicationConfigurationTemplate;

trait CreateReplicationConfigurationTemplateTrait
{
    /**
     * @param CreateReplicationConfigurationTemplateRequest $args
     * @return CreateReplicationConfigurationTemplateResponse
     */
    public function createReplicationConfigurationTemplate(CreateReplicationConfigurationTemplateRequest $args)
    {
        $result = parent::createReplicationConfigurationTemplate($args->toArray());
        return new CreateReplicationConfigurationTemplateResponse($result->toArray());
    }
}
