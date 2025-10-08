<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\DeleteEncoderConfiguration;

trait DeleteEncoderConfigurationTrait
{
    /**
     * @param DeleteEncoderConfigurationRequest $args
     * @return DeleteEncoderConfigurationResponse
     */
    public function deleteEncoderConfiguration(DeleteEncoderConfigurationRequest $args)
    {
        $result = parent::deleteEncoderConfiguration($args->toArray());
        return new DeleteEncoderConfigurationResponse($result->toArray());
    }
}
