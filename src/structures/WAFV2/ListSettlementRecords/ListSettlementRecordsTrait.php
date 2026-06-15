<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListSettlementRecords;

trait ListSettlementRecordsTrait
{
    /**
     * @param ListSettlementRecordsRequest $args
     * @return ListSettlementRecordsResponse
     */
    public function listSettlementRecords(ListSettlementRecordsRequest $args)
    {
        $result = parent::listSettlementRecords($args->toArray());
        return new ListSettlementRecordsResponse($result->toArray());
    }
}
