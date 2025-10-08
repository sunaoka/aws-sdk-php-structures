<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\PutLoggingOptions;

trait PutLoggingOptionsTrait
{
    /**
     * @param PutLoggingOptionsRequest $args
     * @return PutLoggingOptionsResponse
     */
    public function putLoggingOptions(PutLoggingOptionsRequest $args)
    {
        $result = parent::putLoggingOptions($args->toArray());
        return new PutLoggingOptionsResponse($result->toArray());
    }
}
