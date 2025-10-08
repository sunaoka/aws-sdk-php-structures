<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplate;

trait CreateLaunchTemplateTrait
{
    /**
     * @param CreateLaunchTemplateRequest $args
     * @return CreateLaunchTemplateResponse
     */
    public function createLaunchTemplate(CreateLaunchTemplateRequest $args)
    {
        $result = parent::createLaunchTemplate($args->toArray());
        return new CreateLaunchTemplateResponse($result->toArray());
    }
}
