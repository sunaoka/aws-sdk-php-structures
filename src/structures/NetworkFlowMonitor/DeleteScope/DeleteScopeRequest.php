<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\DeleteScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scopeId
 */
class DeleteScopeRequest extends Request
{
    /**
     * @param array{scopeId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
