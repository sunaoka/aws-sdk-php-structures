<?php

namespace Sunaoka\Aws\Structures\QLDB\ListJournalS3ExportsForLedger;

trait ListJournalS3ExportsForLedgerTrait
{
    /**
     * @param ListJournalS3ExportsForLedgerRequest $args
     * @return ListJournalS3ExportsForLedgerResponse
     */
    public function listJournalS3ExportsForLedger(ListJournalS3ExportsForLedgerRequest $args)
    {
        $result = parent::listJournalS3ExportsForLedger($args->toArray());
        return new ListJournalS3ExportsForLedgerResponse($result->toArray());
    }
}
