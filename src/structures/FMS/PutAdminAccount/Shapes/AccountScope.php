<?php

namespace Sunaoka\Aws\Structures\FMS\PutAdminAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Accounts
 * @property bool|null $AllAccountsEnabled
 * @property bool|null $ExcludeSpecifiedAccounts
 */
class AccountScope extends Shape
{
    /**
     * @param array{
     *     Accounts?: list<string>|null,
     *     AllAccountsEnabled?: bool|null,
     *     ExcludeSpecifiedAccounts?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
