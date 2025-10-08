<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeConfigurationSettings;

trait DescribeConfigurationSettingsTrait
{
    /**
     * @param DescribeConfigurationSettingsRequest $args
     * @return DescribeConfigurationSettingsResponse
     */
    public function describeConfigurationSettings(DescribeConfigurationSettingsRequest $args)
    {
        $result = parent::describeConfigurationSettings($args->toArray());
        return new DescribeConfigurationSettingsResponse($result->toArray());
    }
}
