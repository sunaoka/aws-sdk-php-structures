<?php

namespace Sunaoka\Aws\Structures\Connect\ListTestCaseExecutionRecords;

trait ListTestCaseExecutionRecordsTrait
{
    /**
     * @param ListTestCaseExecutionRecordsRequest $args
     * @return ListTestCaseExecutionRecordsResponse
     */
    public function listTestCaseExecutionRecords(ListTestCaseExecutionRecordsRequest $args)
    {
        $result = parent::listTestCaseExecutionRecords($args->toArray());
        return new ListTestCaseExecutionRecordsResponse($result->toArray());
    }
}
