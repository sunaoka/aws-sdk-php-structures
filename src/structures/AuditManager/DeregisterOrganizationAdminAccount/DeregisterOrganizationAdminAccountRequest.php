<?php

namespace Sunaoka\Aws\Structures\AuditManager\DeregisterOrganizationAdminAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $adminAccountId
 */
class DeregisterOrganizationAdminAccountRequest extends Request
{
    /**
     * @param array{adminAccountId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
