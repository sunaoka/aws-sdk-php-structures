<?php

namespace Sunaoka\Aws\Structures\CloudTrail\RegisterOrganizationDelegatedAdmin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MemberAccountId
 */
class RegisterOrganizationDelegatedAdminRequest extends Request
{
    /**
     * @param array{MemberAccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
