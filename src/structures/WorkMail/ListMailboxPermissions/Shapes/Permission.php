<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMailboxPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GranteeId
 * @property 'GROUP'|'USER' $GranteeType
 * @property list<'FULL_ACCESS'|'SEND_AS'|'SEND_ON_BEHALF'> $PermissionValues
 */
class Permission extends Shape
{
    /**
     * @param array{
     *     GranteeId: string,
     *     GranteeType: 'GROUP'|'USER',
     *     PermissionValues: list<'FULL_ACCESS'|'SEND_AS'|'SEND_ON_BEHALF'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
