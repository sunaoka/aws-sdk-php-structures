<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationVpcConfiguration;

trait AddApplicationVpcConfigurationTrait
{
    /**
     * @param AddApplicationVpcConfigurationRequest $args
     * @return AddApplicationVpcConfigurationResponse
     */
    public function addApplicationVpcConfiguration(AddApplicationVpcConfigurationRequest $args)
    {
        $result = parent::addApplicationVpcConfiguration($args->toArray());
        return new AddApplicationVpcConfigurationResponse($result->toArray());
    }
}
