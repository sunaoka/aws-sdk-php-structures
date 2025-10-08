<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLaunchTemplateVersions;

trait DeleteLaunchTemplateVersionsTrait
{
    /**
     * @param DeleteLaunchTemplateVersionsRequest $args
     * @return DeleteLaunchTemplateVersionsResponse
     */
    public function deleteLaunchTemplateVersions(DeleteLaunchTemplateVersionsRequest $args)
    {
        $result = parent::deleteLaunchTemplateVersions($args->toArray());
        return new DeleteLaunchTemplateVersionsResponse($result->toArray());
    }
}
