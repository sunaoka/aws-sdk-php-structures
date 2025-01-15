<?php

namespace Sunaoka\Aws\Structures\Iam\ListEntitiesForPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleName
 * @property string|null $RoleId
 */
class PolicyRole extends Shape
{
    /**
     * @param array{
     *     RoleName?: string|null,
     *     RoleId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
