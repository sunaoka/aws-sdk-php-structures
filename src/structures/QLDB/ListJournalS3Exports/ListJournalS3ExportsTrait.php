<?php

namespace Sunaoka\Aws\Structures\QLDB\ListJournalS3Exports;

trait ListJournalS3ExportsTrait
{
    /**
     * @param ListJournalS3ExportsRequest $args
     * @return ListJournalS3ExportsResponse
     */
    public function listJournalS3Exports(ListJournalS3ExportsRequest $args)
    {
        $result = parent::listJournalS3Exports($args->toArray());
        return new ListJournalS3ExportsResponse($result->toArray());
    }
}
