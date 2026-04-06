<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateEncoderConfiguration;

trait CreateEncoderConfigurationTrait
{
    /**
     * @param CreateEncoderConfigurationRequest $args
     * @return CreateEncoderConfigurationResponse
     */
    public function createEncoderConfiguration(CreateEncoderConfigurationRequest $args)
    {
        $result = parent::createEncoderConfiguration($args->toArray());
        return new CreateEncoderConfigurationResponse($result->toArray());
    }
}
