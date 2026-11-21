<?php

namespace Sunaoka\Aws\Structures\Payments\ListFinancialRecords;

trait ListFinancialRecordsTrait
{
    /**
     * @param ListFinancialRecordsRequest $args
     * @return ListFinancialRecordsResponse
     */
    public function listFinancialRecords(ListFinancialRecordsRequest $args)
    {
        $result = parent::listFinancialRecords($args->toArray());
        return new ListFinancialRecordsResponse($result->toArray());
    }
}
