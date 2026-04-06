<?php

namespace Sunaoka\Aws\Structures\QLDB\ExportJournalToS3;

trait ExportJournalToS3Trait
{
    /**
     * @param ExportJournalToS3Request $args
     * @return ExportJournalToS3Response
     */
    public function exportJournalToS3(ExportJournalToS3Request $args)
    {
        $result = parent::exportJournalToS3($args->toArray());
        return new ExportJournalToS3Response($result->toArray());
    }
}
