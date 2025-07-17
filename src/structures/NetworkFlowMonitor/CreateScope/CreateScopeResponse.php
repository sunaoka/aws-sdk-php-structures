<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\CreateScope;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $scopeId
 * @property 'SUCCEEDED'|'IN_PROGRESS'|'FAILED'|'DEACTIVATING'|'DEACTIVATED' $status
 * @property string $scopeArn
 * @property array<string, string>|null $tags
 */
class CreateScopeResponse extends Response
{
}
