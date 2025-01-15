<?php

namespace Sunaoka\Aws\Structures\SSO\ListAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $accountName
 * @property string|null $emailAddress
 */
class AccountInfo extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     accountName?: string|null,
     *     emailAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
