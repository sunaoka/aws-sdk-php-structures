<?php

namespace Sunaoka\Aws\Structures\Connect\ListRoutingProfileQueues;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property list<Shapes\RoutingProfileQueueConfigSummary>|null $RoutingProfileQueueConfigSummaryList
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class ListRoutingProfileQueuesResponse extends Response
{
}
