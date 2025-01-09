<?php

namespace Sunaoka\Aws\Structures\Iam\ListEntitiesForPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleName
 * @property string $RoleId
 */
class PolicyRole extends Shape
{
    /**
     * @param array{
     *     RoleName?: string,
     *     RoleId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
