<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetSuiteRun;

trait GetSuiteRunTrait
{
    /**
     * @param GetSuiteRunRequest $args
     * @return GetSuiteRunResponse
     */
    public function getSuiteRun(GetSuiteRunRequest $args)
    {
        $result = parent::getSuiteRun($args->toArray());
        return new GetSuiteRunResponse($result->toArray());
    }
}
