<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetMonitorScopeSuggestions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'COMPLETE'|'INCOMPLETE'|'PENDING'|'STALE' $status
 * @property list<Shapes\AccountToAdd> $accountsToAdd
 * @property string|null $nextToken
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class GetMonitorScopeSuggestionsResponse extends Response
{
}
