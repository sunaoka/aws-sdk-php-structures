<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\UpdateScope;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $scopeId
 * @property 'SUCCEEDED'|'IN_PROGRESS'|'FAILED' $status
 * @property string $scopeArn
 * @property array<string, string>|null $tags
 */
class UpdateScopeResponse extends Response
{
}
