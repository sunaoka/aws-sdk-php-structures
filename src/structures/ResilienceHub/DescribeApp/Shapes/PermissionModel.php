<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $crossAccountRoleArns
 * @property string|null $invokerRoleName
 * @property 'LegacyIAMUser'|'RoleBased' $type
 */
class PermissionModel extends Shape
{
    /**
     * @param array{
     *     crossAccountRoleArns?: list<string>|null,
     *     invokerRoleName?: string|null,
     *     type: 'LegacyIAMUser'|'RoleBased'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
