<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion;

trait CreateLaunchTemplateVersionTrait
{
    /**
     * @param CreateLaunchTemplateVersionRequest $args
     * @return CreateLaunchTemplateVersionResponse
     */
    public function createLaunchTemplateVersion(CreateLaunchTemplateVersionRequest $args)
    {
        $result = parent::createLaunchTemplateVersion($args->toArray());
        return new CreateLaunchTemplateVersionResponse($result->toArray());
    }
}
