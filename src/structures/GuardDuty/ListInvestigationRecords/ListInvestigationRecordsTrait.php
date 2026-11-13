<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords;

trait ListInvestigationRecordsTrait
{
    /**
     * @param ListInvestigationRecordsRequest $args
     * @return ListInvestigationRecordsResponse
     */
    public function listInvestigationRecords(ListInvestigationRecordsRequest $args)
    {
        $result = parent::listInvestigationRecords($args->toArray());
        return new ListInvestigationRecordsResponse($result->toArray());
    }
}
