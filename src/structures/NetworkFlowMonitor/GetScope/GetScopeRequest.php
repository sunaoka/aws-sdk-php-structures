<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scopeId
 */
class GetScopeRequest extends Request
{
    /**
     * @param array{scopeId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
