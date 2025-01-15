<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\ListStreams;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Stream>|null $Streams
 * @property string|null $LastEvaluatedStreamArn
 */
class ListStreamsResponse extends Response
{
}
