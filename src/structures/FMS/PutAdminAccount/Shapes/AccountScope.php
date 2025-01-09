<?php

namespace Sunaoka\Aws\Structures\FMS\PutAdminAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Accounts
 * @property bool $AllAccountsEnabled
 * @property bool $ExcludeSpecifiedAccounts
 */
class AccountScope extends Shape
{
    /**
     * @param array{
     *     Accounts?: list<string>,
     *     AllAccountsEnabled?: bool,
     *     ExcludeSpecifiedAccounts?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
