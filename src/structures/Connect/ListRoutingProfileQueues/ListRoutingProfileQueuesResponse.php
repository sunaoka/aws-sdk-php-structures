<?php

namespace Sunaoka\Aws\Structures\Connect\ListRoutingProfileQueues;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NextToken
 * @property list<Shapes\RoutingProfileQueueConfigSummary> $RoutingProfileQueueConfigSummaryList
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedRegion
 */
class ListRoutingProfileQueuesResponse extends Response
{
}
