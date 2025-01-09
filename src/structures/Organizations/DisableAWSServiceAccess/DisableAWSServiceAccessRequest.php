<?php

namespace Sunaoka\Aws\Structures\Organizations\DisableAWSServiceAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServicePrincipal
 */
class DisableAWSServiceAccessRequest extends Request
{
    /**
     * @param array{ServicePrincipal: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
