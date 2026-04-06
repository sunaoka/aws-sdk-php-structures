<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams;

class KeyspacesStreamsClient extends \Aws\KeyspacesStreams\KeyspacesStreamsClient
{
    use GetRecords\GetRecordsTrait;
    use GetShardIterator\GetShardIteratorTrait;
    use GetStream\GetStreamTrait;
    use ListStreams\ListStreamsTrait;
}
