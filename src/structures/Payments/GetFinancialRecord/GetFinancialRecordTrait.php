<?php

namespace Sunaoka\Aws\Structures\Payments\GetFinancialRecord;

trait GetFinancialRecordTrait
{
    /**
     * @param GetFinancialRecordRequest $args
     * @return GetFinancialRecordResponse
     */
    public function getFinancialRecord(GetFinancialRecordRequest $args)
    {
        $result = parent::getFinancialRecord($args->toArray());
        return new GetFinancialRecordResponse($result->toArray());
    }
}
