<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateLaunchConfigurationTemplate;

trait UpdateLaunchConfigurationTemplateTrait
{
    /**
     * @param UpdateLaunchConfigurationTemplateRequest $args
     * @return UpdateLaunchConfigurationTemplateResponse
     */
    public function updateLaunchConfigurationTemplate(UpdateLaunchConfigurationTemplateRequest $args)
    {
        $result = parent::updateLaunchConfigurationTemplate($args->toArray());
        return new UpdateLaunchConfigurationTemplateResponse($result->toArray());
    }
}
