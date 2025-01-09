<?php

namespace Sunaoka\Aws\Structures\Organizations\EnableAWSServiceAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServicePrincipal
 */
class EnableAWSServiceAccessRequest extends Request
{
    /**
     * @param array{ServicePrincipal: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
