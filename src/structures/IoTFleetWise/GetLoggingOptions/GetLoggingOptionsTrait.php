<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetLoggingOptions;

trait GetLoggingOptionsTrait
{
    /**
     * @param GetLoggingOptionsRequest $args
     * @return GetLoggingOptionsResponse
     */
    public function getLoggingOptions(GetLoggingOptionsRequest $args)
    {
        $result = parent::getLoggingOptions($args->toArray());
        return new GetLoggingOptionsResponse($result->toArray());
    }
}
