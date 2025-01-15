<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\GetRecords;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Record>|null $Records
 * @property string|null $NextShardIterator
 */
class GetRecordsResponse extends Response
{
}
