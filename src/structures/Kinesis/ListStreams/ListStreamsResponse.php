<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListStreams;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string> $StreamNames
 * @property bool $HasMoreStreams
 * @property string $NextToken
 * @property list<Shapes\StreamSummary> $StreamSummaries
 */
class ListStreamsResponse extends Response
{
}
