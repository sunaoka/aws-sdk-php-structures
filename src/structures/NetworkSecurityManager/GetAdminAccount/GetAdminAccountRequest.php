<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\GetAdminAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 */
class GetAdminAccountRequest extends Request
{
    /**
     * @param array{accountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
