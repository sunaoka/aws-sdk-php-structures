<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestCases;

trait ListTestCasesTrait
{
    /**
     * @param ListTestCasesRequest $args
     * @return ListTestCasesResponse
     */
    public function listTestCases(ListTestCasesRequest $args)
    {
        $result = parent::listTestCases($args->toArray());
        return new ListTestCasesResponse($result->toArray());
    }
}
