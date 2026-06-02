<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams\GetRecords;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Record>|null $changeRecords
 * @property string|null $nextShardIterator
 * @property Shapes\IteratorDescription|null $iteratorDescription
 */
class GetRecordsResponse extends Response
{
}
