<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListJournalRecords;

trait ListJournalRecordsTrait
{
    /**
     * @param ListJournalRecordsRequest $args
     * @return ListJournalRecordsResponse
     */
    public function listJournalRecords(ListJournalRecordsRequest $args)
    {
        $result = parent::listJournalRecords($args->toArray());
        return new ListJournalRecordsResponse($result->toArray());
    }
}
