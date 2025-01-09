<?php

namespace Sunaoka\Aws\Structures\FMS\AssociateAdminAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AdminAccount
 */
class AssociateAdminAccountRequest extends Request
{
    /**
     * @param array{AdminAccount: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
