<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams;

class DynamoDbStreamsClient extends \Aws\DynamoDbStreams\DynamoDbStreamsClient
{
    use DescribeStream\DescribeStreamTrait;
    use GetRecords\GetRecordsTrait;
    use GetShardIterator\GetShardIteratorTrait;
    use ListStreams\ListStreamsTrait;
}
