<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\DeleteAdminAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 */
class DeleteAdminAccountRequest extends Request
{
    /**
     * @param array{accountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
