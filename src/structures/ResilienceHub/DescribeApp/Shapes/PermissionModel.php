<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $crossAccountRoleArns
 * @property string $invokerRoleName
 * @property 'LegacyIAMUser'|'RoleBased' $type
 */
class PermissionModel extends Shape
{
    /**
     * @param array{
     *     crossAccountRoleArns?: list<string>,
     *     invokerRoleName?: string,
     *     type: 'LegacyIAMUser'|'RoleBased'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
