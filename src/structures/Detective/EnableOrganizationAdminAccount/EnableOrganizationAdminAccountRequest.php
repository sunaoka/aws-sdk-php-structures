<?php

namespace Sunaoka\Aws\Structures\Detective\EnableOrganizationAdminAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 */
class EnableOrganizationAdminAccountRequest extends Request
{
    /**
     * @param array{AccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
