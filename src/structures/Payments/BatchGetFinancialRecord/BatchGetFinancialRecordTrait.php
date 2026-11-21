<?php

namespace Sunaoka\Aws\Structures\Payments\BatchGetFinancialRecord;

trait BatchGetFinancialRecordTrait
{
    /**
     * @param BatchGetFinancialRecordRequest $args
     * @return BatchGetFinancialRecordResponse
     */
    public function batchGetFinancialRecord(BatchGetFinancialRecordRequest $args)
    {
        $result = parent::batchGetFinancialRecord($args->toArray());
        return new BatchGetFinancialRecordResponse($result->toArray());
    }
}
