<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\DeleteScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scopeIdentifier
 */
class DeleteScopeRequest extends Request
{
    /**
     * @param array{scopeIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
