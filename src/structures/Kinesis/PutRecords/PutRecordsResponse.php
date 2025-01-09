<?php

namespace Sunaoka\Aws\Structures\Kinesis\PutRecords;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $FailedRecordCount
 * @property list<Shapes\PutRecordsResultEntry> $Records
 * @property 'NONE'|'KMS' $EncryptionType
 */
class PutRecordsResponse extends Response
{
}
