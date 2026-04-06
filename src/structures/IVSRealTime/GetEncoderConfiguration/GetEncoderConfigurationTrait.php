<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetEncoderConfiguration;

trait GetEncoderConfigurationTrait
{
    /**
     * @param GetEncoderConfigurationRequest $args
     * @return GetEncoderConfigurationResponse
     */
    public function getEncoderConfiguration(GetEncoderConfigurationRequest $args)
    {
        $result = parent::getEncoderConfiguration($args->toArray());
        return new GetEncoderConfigurationResponse($result->toArray());
    }
}
