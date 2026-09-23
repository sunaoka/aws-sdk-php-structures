<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\GetScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scopeIdentifier
 */
class GetScopeRequest extends Request
{
    /**
     * @param array{scopeIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
