<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListImpersonationRoles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImpersonationRoleId
 * @property string $Name
 * @property 'FULL_ACCESS'|'READ_ONLY' $Type
 * @property \Aws\Api\DateTimeResult $DateCreated
 * @property \Aws\Api\DateTimeResult $DateModified
 */
class ImpersonationRole extends Shape
{
    /**
     * @param array{
     *     ImpersonationRoleId?: string,
     *     Name?: string,
     *     Type?: 'FULL_ACCESS'|'READ_ONLY',
     *     DateCreated?: \Aws\Api\DateTimeResult,
     *     DateModified?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
