<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeLaunchConfigurationTemplates;

trait DescribeLaunchConfigurationTemplatesTrait
{
    /**
     * @param DescribeLaunchConfigurationTemplatesRequest $args
     * @return DescribeLaunchConfigurationTemplatesResponse
     */
    public function describeLaunchConfigurationTemplates(DescribeLaunchConfigurationTemplatesRequest $args)
    {
        $result = parent::describeLaunchConfigurationTemplates($args->toArray());
        return new DescribeLaunchConfigurationTemplatesResponse($result->toArray());
    }
}
