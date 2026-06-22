<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ReportInstrumentationConfigurationStatus;

trait ReportInstrumentationConfigurationStatusTrait
{
    /**
     * @param ReportInstrumentationConfigurationStatusRequest $args
     * @return ReportInstrumentationConfigurationStatusResponse
     */
    public function reportInstrumentationConfigurationStatus(ReportInstrumentationConfigurationStatusRequest $args)
    {
        $result = parent::reportInstrumentationConfigurationStatus($args->toArray());
        return new ReportInstrumentationConfigurationStatusResponse($result->toArray());
    }
}
