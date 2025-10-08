<?php

namespace Sunaoka\Aws\Structures\mgn\CreateLaunchConfigurationTemplate;

trait CreateLaunchConfigurationTemplateTrait
{
    /**
     * @param CreateLaunchConfigurationTemplateRequest $args
     * @return CreateLaunchConfigurationTemplateResponse
     */
    public function createLaunchConfigurationTemplate(CreateLaunchConfigurationTemplateRequest $args)
    {
        $result = parent::createLaunchConfigurationTemplate($args->toArray());
        return new CreateLaunchConfigurationTemplateResponse($result->toArray());
    }
}
