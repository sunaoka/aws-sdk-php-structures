<?php

namespace Sunaoka\Aws\Structures\Macie2\DisableOrganizationAdminAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $adminAccountId
 */
class DisableOrganizationAdminAccountRequest extends Request
{
    /**
     * @param array{adminAccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
