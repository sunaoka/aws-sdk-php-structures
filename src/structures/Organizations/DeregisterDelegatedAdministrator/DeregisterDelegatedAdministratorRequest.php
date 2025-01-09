<?php

namespace Sunaoka\Aws\Structures\Organizations\DeregisterDelegatedAdministrator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $ServicePrincipal
 */
class DeregisterDelegatedAdministratorRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     ServicePrincipal: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
