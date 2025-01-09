<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetEventStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DomainName
 * @property string $EventStreamArn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'RUNNING'|'STOPPED' $State
 * @property \Aws\Api\DateTimeResult $StoppedSince
 * @property Shapes\EventStreamDestinationDetails $DestinationDetails
 * @property array<string, string> $Tags
 */
class GetEventStreamResponse extends Response
{
}
