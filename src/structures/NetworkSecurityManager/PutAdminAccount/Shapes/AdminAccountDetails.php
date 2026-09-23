<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\PutAdminAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $adminAccount
 * @property int<1, 10> $priority
 * @property AdminScope|null $adminScope
 * @property 'ONBOARDED'|'OFFBOARDED'|null $status
 */
class AdminAccountDetails extends Shape
{
    /**
     * @param array{
     *     adminAccount: string,
     *     priority: int<1, 10>,
     *     adminScope?: AdminScope|null,
     *     status?: 'ONBOARDED'|'OFFBOARDED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
