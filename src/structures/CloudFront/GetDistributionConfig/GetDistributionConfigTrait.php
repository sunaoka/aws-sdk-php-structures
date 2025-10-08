<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistributionConfig;

trait GetDistributionConfigTrait
{
    /**
     * @param GetDistributionConfigRequest $args
     * @return GetDistributionConfigResponse
     */
    public function getDistributionConfig(GetDistributionConfigRequest $args)
    {
        $result = parent::getDistributionConfig($args->toArray());
        return new GetDistributionConfigResponse($result->toArray());
    }
}
