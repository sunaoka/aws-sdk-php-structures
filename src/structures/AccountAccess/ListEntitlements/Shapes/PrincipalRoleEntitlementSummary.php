<?php

namespace Sunaoka\Aws\Structures\AccountAccess\ListEntitlements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Principal $principal
 * @property string $roleArn
 * @property string $account
 * @property string|null $accountName
 */
class PrincipalRoleEntitlementSummary extends Shape
{
    /**
     * @param array{
     *     principal: Principal,
     *     roleArn: string,
     *     account: string,
     *     accountName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
