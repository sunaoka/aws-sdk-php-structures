<?php

namespace Sunaoka\Aws\Structures\mgn\DeleteLaunchConfigurationTemplate;

trait DeleteLaunchConfigurationTemplateTrait
{
    /**
     * @param DeleteLaunchConfigurationTemplateRequest $args
     * @return DeleteLaunchConfigurationTemplateResponse
     */
    public function deleteLaunchConfigurationTemplate(DeleteLaunchConfigurationTemplateRequest $args)
    {
        $result = parent::deleteLaunchConfigurationTemplate($args->toArray());
        return new DeleteLaunchConfigurationTemplateResponse($result->toArray());
    }
}
