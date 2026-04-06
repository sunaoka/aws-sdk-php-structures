<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestRunTestCases;

trait ListTestRunTestCasesTrait
{
    /**
     * @param ListTestRunTestCasesRequest $args
     * @return ListTestRunTestCasesResponse
     */
    public function listTestRunTestCases(ListTestRunTestCasesRequest $args)
    {
        $result = parent::listTestRunTestCases($args->toArray());
        return new ListTestRunTestCasesResponse($result->toArray());
    }
}
