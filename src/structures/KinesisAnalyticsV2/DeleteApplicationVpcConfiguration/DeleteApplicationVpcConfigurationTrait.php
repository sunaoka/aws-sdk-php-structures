<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DeleteApplicationVpcConfiguration;

trait DeleteApplicationVpcConfigurationTrait
{
    /**
     * @param DeleteApplicationVpcConfigurationRequest $args
     * @return DeleteApplicationVpcConfigurationResponse
     */
    public function deleteApplicationVpcConfiguration(DeleteApplicationVpcConfigurationRequest $args)
    {
        $result = parent::deleteApplicationVpcConfiguration($args->toArray());
        return new DeleteApplicationVpcConfigurationResponse($result->toArray());
    }
}
