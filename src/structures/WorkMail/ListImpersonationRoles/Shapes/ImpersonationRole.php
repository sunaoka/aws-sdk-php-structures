<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListImpersonationRoles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ImpersonationRoleId
 * @property string|null $Name
 * @property 'FULL_ACCESS'|'READ_ONLY'|null $Type
 * @property \Aws\Api\DateTimeResult|null $DateCreated
 * @property \Aws\Api\DateTimeResult|null $DateModified
 */
class ImpersonationRole extends Shape
{
    /**
     * @param array{
     *     ImpersonationRoleId?: string|null,
     *     Name?: string|null,
     *     Type?: 'FULL_ACCESS'|'READ_ONLY'|null,
     *     DateCreated?: \Aws\Api\DateTimeResult|null,
     *     DateModified?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
