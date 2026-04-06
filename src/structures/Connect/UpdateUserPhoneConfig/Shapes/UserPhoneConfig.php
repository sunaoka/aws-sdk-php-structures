<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserPhoneConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SOFT_PHONE'|'DESK_PHONE' $PhoneType
 * @property bool|null $AutoAccept
 * @property int<0, max>|null $AfterContactWorkTimeLimit
 * @property string|null $DeskPhoneNumber
 */
class UserPhoneConfig extends Shape
{
    /**
     * @param array{
     *     PhoneType: 'SOFT_PHONE'|'DESK_PHONE',
     *     AutoAccept?: bool|null,
     *     AfterContactWorkTimeLimit?: int<0, max>|null,
     *     DeskPhoneNumber?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
