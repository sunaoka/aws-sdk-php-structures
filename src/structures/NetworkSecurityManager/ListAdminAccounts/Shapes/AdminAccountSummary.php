<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListAdminAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property int<1, 10>|null $priority
 * @property string|null $name
 * @property string|null $email
 */
class AdminAccountSummary extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     priority?: int<1, 10>|null,
     *     name?: string|null,
     *     email?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
