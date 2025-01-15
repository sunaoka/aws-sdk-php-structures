<?php

namespace Sunaoka\Aws\Structures\Kinesis\PutRecords;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<1, max>|null $FailedRecordCount
 * @property list<Shapes\PutRecordsResultEntry> $Records
 * @property 'NONE'|'KMS'|null $EncryptionType
 */
class PutRecordsResponse extends Response
{
}
