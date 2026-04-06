<?php

namespace Sunaoka\Aws\Structures\SecurityHub\EnableOrganizationAdminAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AdminAccountId
 */
class EnableOrganizationAdminAccountRequest extends Request
{
    /**
     * @param array{AdminAccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
