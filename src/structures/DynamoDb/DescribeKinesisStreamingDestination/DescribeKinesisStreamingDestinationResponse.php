<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeKinesisStreamingDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TableName
 * @property list<Shapes\KinesisDataStreamDestination>|null $KinesisDataStreamDestinations
 */
class DescribeKinesisStreamingDestinationResponse extends Response
{
}
