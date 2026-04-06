<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListEncoderConfigurations;

trait ListEncoderConfigurationsTrait
{
    /**
     * @param ListEncoderConfigurationsRequest $args
     * @return ListEncoderConfigurationsResponse
     */
    public function listEncoderConfigurations(ListEncoderConfigurationsRequest $args)
    {
        $result = parent::listEncoderConfigurations($args->toArray());
        return new ListEncoderConfigurationsResponse($result->toArray());
    }
}
