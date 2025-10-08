<?php

namespace Sunaoka\Aws\Structures\Redshift\GetReservedNodeExchangeConfigurationOptions;

trait GetReservedNodeExchangeConfigurationOptionsTrait
{
    /**
     * @param GetReservedNodeExchangeConfigurationOptionsRequest $args
     * @return GetReservedNodeExchangeConfigurationOptionsResponse
     */
    public function getReservedNodeExchangeConfigurationOptions(
        GetReservedNodeExchangeConfigurationOptionsRequest $args,
    ) {
        $result = parent::getReservedNodeExchangeConfigurationOptions($args->toArray());
        return new GetReservedNodeExchangeConfigurationOptionsResponse($result->toArray());
    }
}
