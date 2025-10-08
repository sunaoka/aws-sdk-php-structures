<?php

namespace Sunaoka\Aws\Structures\QLDB\DescribeJournalS3Export;

trait DescribeJournalS3ExportTrait
{
    /**
     * @param DescribeJournalS3ExportRequest $args
     * @return DescribeJournalS3ExportResponse
     */
    public function describeJournalS3Export(DescribeJournalS3ExportRequest $args)
    {
        $result = parent::describeJournalS3Export($args->toArray());
        return new DescribeJournalS3ExportResponse($result->toArray());
    }
}
