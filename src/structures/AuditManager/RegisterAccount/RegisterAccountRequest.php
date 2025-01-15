<?php

namespace Sunaoka\Aws\Structures\AuditManager\RegisterAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $kmsKey
 * @property string|null $delegatedAdminAccount
 */
class RegisterAccountRequest extends Request
{
    /**
     * @param array{
     *     kmsKey?: string|null,
     *     delegatedAdminAccount?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
