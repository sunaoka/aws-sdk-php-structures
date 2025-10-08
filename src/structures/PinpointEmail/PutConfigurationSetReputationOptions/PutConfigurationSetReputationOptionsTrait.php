<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutConfigurationSetReputationOptions;

trait PutConfigurationSetReputationOptionsTrait
{
    /**
     * @param PutConfigurationSetReputationOptionsRequest $args
     * @return PutConfigurationSetReputationOptionsResponse
     */
    public function putConfigurationSetReputationOptions(PutConfigurationSetReputationOptionsRequest $args)
    {
        $result = parent::putConfigurationSetReputationOptions($args->toArray());
        return new PutConfigurationSetReputationOptionsResponse($result->toArray());
    }
}
