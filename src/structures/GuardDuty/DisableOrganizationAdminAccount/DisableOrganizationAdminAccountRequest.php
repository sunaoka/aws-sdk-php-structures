<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DisableOrganizationAdminAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AdminAccountId
 */
class DisableOrganizationAdminAccountRequest extends Request
{
    /**
     * @param array{AdminAccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
