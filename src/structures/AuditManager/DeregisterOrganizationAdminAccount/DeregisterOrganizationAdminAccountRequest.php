<?php

namespace Sunaoka\Aws\Structures\AuditManager\DeregisterOrganizationAdminAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $adminAccountId
 */
class DeregisterOrganizationAdminAccountRequest extends Request
{
    /**
     * @param array{adminAccountId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
