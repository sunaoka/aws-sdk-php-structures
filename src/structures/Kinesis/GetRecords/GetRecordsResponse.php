<?php

namespace Sunaoka\Aws\Structures\Kinesis\GetRecords;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Record> $Records
 * @property string $NextShardIterator
 * @property int $MillisBehindLatest
 * @property list<Shapes\ChildShard> $ChildShards
 */
class GetRecordsResponse extends Response
{
}
