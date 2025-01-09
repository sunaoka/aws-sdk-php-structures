<?php

namespace Sunaoka\Aws\Structures\SSO\ListAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $accountName
 * @property string $emailAddress
 */
class AccountInfo extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     accountName?: string,
     *     emailAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
