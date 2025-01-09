<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DeregisterOrganizationDelegatedAdmin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DelegatedAdminAccountId
 */
class DeregisterOrganizationDelegatedAdminRequest extends Request
{
    /**
     * @param array{DelegatedAdminAccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
