<?php

namespace Sunaoka\Aws\Structures\Connect\ListTestCaseExecutions;

trait ListTestCaseExecutionsTrait
{
    /**
     * @param ListTestCaseExecutionsRequest $args
     * @return ListTestCaseExecutionsResponse
     */
    public function listTestCaseExecutions(ListTestCaseExecutionsRequest $args)
    {
        $result = parent::listTestCaseExecutions($args->toArray());
        return new ListTestCaseExecutionsResponse($result->toArray());
    }
}
