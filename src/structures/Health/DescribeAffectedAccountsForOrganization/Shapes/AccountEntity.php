<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedAccountsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property array<string, string>|null $accountTags
 */
class AccountEntity extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     accountTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
