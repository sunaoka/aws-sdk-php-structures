<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetStreamingDistributionConfig;

trait GetStreamingDistributionConfigTrait
{
    /**
     * @param GetStreamingDistributionConfigRequest $args
     * @return GetStreamingDistributionConfigResponse
     */
    public function getStreamingDistributionConfig(GetStreamingDistributionConfigRequest $args)
    {
        $result = parent::getStreamingDistributionConfig($args->toArray());
        return new GetStreamingDistributionConfigResponse($result->toArray());
    }
}
