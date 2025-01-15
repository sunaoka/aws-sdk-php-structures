<?php

namespace Sunaoka\Aws\Structures\Neptune\RebootDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBSecurityGroupName
 * @property string|null $Status
 */
class DBSecurityGroupMembership extends Shape
{
    /**
     * @param array{
     *     DBSecurityGroupName?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
