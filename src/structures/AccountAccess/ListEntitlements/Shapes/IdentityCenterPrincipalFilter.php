<?php

namespace Sunaoka\Aws\Structures\AccountAccess\ListEntitlements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userId
 * @property string|null $groupId
 */
class IdentityCenterPrincipalFilter extends Shape
{
    /**
     * @param array{
     *     userId?: string|null,
     *     groupId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
