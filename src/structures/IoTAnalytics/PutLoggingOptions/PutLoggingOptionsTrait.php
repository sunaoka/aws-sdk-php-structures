<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\PutLoggingOptions;

trait PutLoggingOptionsTrait
{
    /**
     * @param PutLoggingOptionsRequest $args
     * @return void
     */
    public function putLoggingOptions(PutLoggingOptionsRequest $args)
    {
        parent::putLoggingOptions($args->toArray());
    }
}
