<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\ListSuiteRuns;

trait ListSuiteRunsTrait
{
    /**
     * @param ListSuiteRunsRequest $args
     * @return ListSuiteRunsResponse
     */
    public function listSuiteRuns(ListSuiteRunsRequest $args)
    {
        $result = parent::listSuiteRuns($args->toArray());
        return new ListSuiteRunsResponse($result->toArray());
    }
}
