<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutConfigurationSetSendingOptions;

trait PutConfigurationSetSendingOptionsTrait
{
    /**
     * @param PutConfigurationSetSendingOptionsRequest $args
     * @return PutConfigurationSetSendingOptionsResponse
     */
    public function putConfigurationSetSendingOptions(PutConfigurationSetSendingOptionsRequest $args)
    {
        $result = parent::putConfigurationSetSendingOptions($args->toArray());
        return new PutConfigurationSetSendingOptionsResponse($result->toArray());
    }
}
