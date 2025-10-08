<?php

namespace Sunaoka\Aws\Structures\Iot\GetV2LoggingOptions;

trait GetV2LoggingOptionsTrait
{
    /**
     * @param GetV2LoggingOptionsRequest $args
     * @return GetV2LoggingOptionsResponse
     */
    public function getV2LoggingOptions(GetV2LoggingOptionsRequest $args)
    {
        $result = parent::getV2LoggingOptions($args->toArray());
        return new GetV2LoggingOptionsResponse($result->toArray());
    }
}
