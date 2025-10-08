<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLaunchTemplate;

trait DeleteLaunchTemplateTrait
{
    /**
     * @param DeleteLaunchTemplateRequest $args
     * @return DeleteLaunchTemplateResponse
     */
    public function deleteLaunchTemplate(DeleteLaunchTemplateRequest $args)
    {
        $result = parent::deleteLaunchTemplate($args->toArray());
        return new DeleteLaunchTemplateResponse($result->toArray());
    }
}
