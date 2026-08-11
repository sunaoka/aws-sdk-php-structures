<?php

namespace Sunaoka\Aws\Structures\AccountAccess\ListEntitlements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PrincipalFilter|null $principal
 * @property string|null $roleArn
 * @property string|null $account
 */
class PrincipalRoleEntitlementFilter extends Shape
{
    /**
     * @param array{
     *     principal?: PrincipalFilter|null,
     *     roleArn?: string|null,
     *     account?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
