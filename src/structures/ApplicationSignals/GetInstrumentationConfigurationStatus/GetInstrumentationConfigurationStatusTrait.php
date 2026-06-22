<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetInstrumentationConfigurationStatus;

trait GetInstrumentationConfigurationStatusTrait
{
    /**
     * @param GetInstrumentationConfigurationStatusRequest $args
     * @return GetInstrumentationConfigurationStatusResponse
     */
    public function getInstrumentationConfigurationStatus(GetInstrumentationConfigurationStatusRequest $args)
    {
        $result = parent::getInstrumentationConfigurationStatus($args->toArray());
        return new GetInstrumentationConfigurationStatusResponse($result->toArray());
    }
}
