<?php

namespace Sunaoka\Aws\Structures\QLDB;

class QLDBClient extends \Aws\QLDB\QLDBClient
{
    use CancelJournalKinesisStream\CancelJournalKinesisStreamTrait;
    use CreateLedger\CreateLedgerTrait;
    use DeleteLedger\DeleteLedgerTrait;
    use DescribeJournalKinesisStream\DescribeJournalKinesisStreamTrait;
    use DescribeJournalS3Export\DescribeJournalS3ExportTrait;
    use DescribeLedger\DescribeLedgerTrait;
    use ExportJournalToS3\ExportJournalToS3Trait;
    use GetBlock\GetBlockTrait;
    use GetDigest\GetDigestTrait;
    use GetRevision\GetRevisionTrait;
    use ListJournalKinesisStreamsForLedger\ListJournalKinesisStreamsForLedgerTrait;
    use ListJournalS3Exports\ListJournalS3ExportsTrait;
    use ListJournalS3ExportsForLedger\ListJournalS3ExportsForLedgerTrait;
    use ListLedgers\ListLedgersTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StreamJournalToKinesis\StreamJournalToKinesisTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateLedger\UpdateLedgerTrait;
    use UpdateLedgerPermissionsMode\UpdateLedgerPermissionsModeTrait;
}
