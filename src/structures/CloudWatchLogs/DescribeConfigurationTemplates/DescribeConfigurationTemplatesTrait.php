<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeConfigurationTemplates;

trait DescribeConfigurationTemplatesTrait
{
    /**
     * @param DescribeConfigurationTemplatesRequest $args
     * @return DescribeConfigurationTemplatesResponse
     */
    public function describeConfigurationTemplates(DescribeConfigurationTemplatesRequest $args)
    {
        $result = parent::describeConfigurationTemplates($args->toArray());
        return new DescribeConfigurationTemplatesResponse($result->toArray());
    }
}
