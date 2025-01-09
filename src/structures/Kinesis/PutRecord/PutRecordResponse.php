<?php

namespace Sunaoka\Aws\Structures\Kinesis\PutRecord;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ShardId
 * @property string $SequenceNumber
 * @property 'NONE'|'KMS' $EncryptionType
 */
class PutRecordResponse extends Response
{
}
