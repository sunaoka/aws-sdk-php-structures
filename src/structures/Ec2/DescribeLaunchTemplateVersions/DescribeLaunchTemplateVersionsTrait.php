<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLaunchTemplateVersions;

trait DescribeLaunchTemplateVersionsTrait
{
    /**
     * @param DescribeLaunchTemplateVersionsRequest $args
     * @return DescribeLaunchTemplateVersionsResponse
     */
    public function describeLaunchTemplateVersions(DescribeLaunchTemplateVersionsRequest $args)
    {
        $result = parent::describeLaunchTemplateVersions($args->toArray());
        return new DescribeLaunchTemplateVersionsResponse($result->toArray());
    }
}
