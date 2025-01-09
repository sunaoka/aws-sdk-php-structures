<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetScope;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $scopeId
 * @property 'SUCCEEDED'|'IN_PROGRESS'|'FAILED' $status
 * @property string $scopeArn
 * @property list<Shapes\TargetResource> $targets
 * @property array<string, string> $tags
 */
class GetScopeResponse extends Response
{
}
