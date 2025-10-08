<?php

namespace Sunaoka\Aws\Structures\Ecr\PutImageScanningConfiguration;

trait PutImageScanningConfigurationTrait
{
    /**
     * @param PutImageScanningConfigurationRequest $args
     * @return PutImageScanningConfigurationResponse
     */
    public function putImageScanningConfiguration(PutImageScanningConfigurationRequest $args)
    {
        $result = parent::putImageScanningConfiguration($args->toArray());
        return new PutImageScanningConfigurationResponse($result->toArray());
    }
}
