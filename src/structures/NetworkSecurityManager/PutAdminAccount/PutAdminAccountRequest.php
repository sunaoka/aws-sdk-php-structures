<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\PutAdminAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property int<1, 10> $priority
 * @property Shapes\AdminScopeInput|null $adminScope
 */
class PutAdminAccountRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     priority: int<1, 10>,
     *     adminScope?: Shapes\AdminScopeInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
