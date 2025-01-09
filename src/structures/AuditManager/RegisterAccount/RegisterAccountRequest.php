<?php

namespace Sunaoka\Aws\Structures\AuditManager\RegisterAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $kmsKey
 * @property string $delegatedAdminAccount
 */
class RegisterAccountRequest extends Request
{
    /**
     * @param array{
     *     kmsKey?: string,
     *     delegatedAdminAccount?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
