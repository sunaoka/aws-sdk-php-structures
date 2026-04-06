<?php

namespace Sunaoka\Aws\Structures\Connect\GetTestCaseExecutionSummary;

trait GetTestCaseExecutionSummaryTrait
{
    /**
     * @param GetTestCaseExecutionSummaryRequest $args
     * @return GetTestCaseExecutionSummaryResponse
     */
    public function getTestCaseExecutionSummary(GetTestCaseExecutionSummaryRequest $args)
    {
        $result = parent::getTestCaseExecutionSummary($args->toArray());
        return new GetTestCaseExecutionSummaryResponse($result->toArray());
    }
}
