<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyLaunchTemplate;

trait ModifyLaunchTemplateTrait
{
    /**
     * @param ModifyLaunchTemplateRequest $args
     * @return ModifyLaunchTemplateResponse
     */
    public function modifyLaunchTemplate(ModifyLaunchTemplateRequest $args)
    {
        $result = parent::modifyLaunchTemplate($args->toArray());
        return new ModifyLaunchTemplateResponse($result->toArray());
    }
}
