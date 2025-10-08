<?php

namespace Sunaoka\Aws\Structures\drs\DeleteReplicationConfigurationTemplate;

trait DeleteReplicationConfigurationTemplateTrait
{
    /**
     * @param DeleteReplicationConfigurationTemplateRequest $args
     * @return DeleteReplicationConfigurationTemplateResponse
     */
    public function deleteReplicationConfigurationTemplate(DeleteReplicationConfigurationTemplateRequest $args)
    {
        $result = parent::deleteReplicationConfigurationTemplate($args->toArray());
        return new DeleteReplicationConfigurationTemplateResponse($result->toArray());
    }
}
