<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\StopSuiteRun;

trait StopSuiteRunTrait
{
    /**
     * @param StopSuiteRunRequest $args
     * @return StopSuiteRunResponse
     */
    public function stopSuiteRun(StopSuiteRunRequest $args)
    {
        $result = parent::stopSuiteRun($args->toArray());
        return new StopSuiteRunResponse($result->toArray());
    }
}
