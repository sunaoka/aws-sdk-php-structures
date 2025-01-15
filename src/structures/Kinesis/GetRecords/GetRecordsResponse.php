<?php

namespace Sunaoka\Aws\Structures\Kinesis\GetRecords;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Record> $Records
 * @property string|null $NextShardIterator
 * @property int<0, max>|null $MillisBehindLatest
 * @property list<Shapes\ChildShard>|null $ChildShards
 */
class GetRecordsResponse extends Response
{
}
