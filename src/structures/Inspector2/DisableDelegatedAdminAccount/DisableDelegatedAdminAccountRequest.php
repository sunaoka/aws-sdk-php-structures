<?php

namespace Sunaoka\Aws\Structures\Inspector2\DisableDelegatedAdminAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $delegatedAdminAccountId
 */
class DisableDelegatedAdminAccountRequest extends Request
{
    /**
     * @param array{delegatedAdminAccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
