<?php

namespace Sunaoka\Aws\Structures\Connect\ListQueueQuickConnects;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property list<Shapes\QuickConnectSummary>|null $QuickConnectSummaryList
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class ListQueueQuickConnectsResponse extends Response
{
}
