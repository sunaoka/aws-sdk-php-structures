<?php

namespace Sunaoka\Aws\Structures\QLDB\ListJournalKinesisStreamsForLedger;

trait ListJournalKinesisStreamsForLedgerTrait
{
    /**
     * @param ListJournalKinesisStreamsForLedgerRequest $args
     * @return ListJournalKinesisStreamsForLedgerResponse
     */
    public function listJournalKinesisStreamsForLedger(ListJournalKinesisStreamsForLedgerRequest $args)
    {
        $result = parent::listJournalKinesisStreamsForLedger($args->toArray());
        return new ListJournalKinesisStreamsForLedgerResponse($result->toArray());
    }
}
