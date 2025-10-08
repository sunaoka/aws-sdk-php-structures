<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\StartSuiteRun;

trait StartSuiteRunTrait
{
    /**
     * @param StartSuiteRunRequest $args
     * @return StartSuiteRunResponse
     */
    public function startSuiteRun(StartSuiteRunRequest $args)
    {
        $result = parent::startSuiteRun($args->toArray());
        return new StartSuiteRunResponse($result->toArray());
    }
}
