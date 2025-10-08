<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLaunchTemplates;

trait DescribeLaunchTemplatesTrait
{
    /**
     * @param DescribeLaunchTemplatesRequest $args
     * @return DescribeLaunchTemplatesResponse
     */
    public function describeLaunchTemplates(DescribeLaunchTemplatesRequest $args)
    {
        $result = parent::describeLaunchTemplates($args->toArray());
        return new DescribeLaunchTemplatesResponse($result->toArray());
    }
}
