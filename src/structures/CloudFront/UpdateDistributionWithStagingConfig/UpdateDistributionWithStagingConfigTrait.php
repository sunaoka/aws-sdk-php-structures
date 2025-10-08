<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistributionWithStagingConfig;

trait UpdateDistributionWithStagingConfigTrait
{
    /**
     * @param UpdateDistributionWithStagingConfigRequest $args
     * @return UpdateDistributionWithStagingConfigResponse
     */
    public function updateDistributionWithStagingConfig(UpdateDistributionWithStagingConfigRequest $args)
    {
        $result = parent::updateDistributionWithStagingConfig($args->toArray());
        return new UpdateDistributionWithStagingConfigResponse($result->toArray());
    }
}
