<?php

namespace Sunaoka\Aws\Structures\AuditManager\RegisterOrganizationAdminAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $adminAccountId
 */
class RegisterOrganizationAdminAccountRequest extends Request
{
    /**
     * @param array{adminAccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
