<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserPhoneConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SOFT_PHONE'|'DESK_PHONE' $PhoneType
 * @property bool $AutoAccept
 * @property int $AfterContactWorkTimeLimit
 * @property string $DeskPhoneNumber
 */
class UserPhoneConfig extends Shape
{
    /**
     * @param array{
     *     PhoneType: 'SOFT_PHONE'|'DESK_PHONE',
     *     AutoAccept?: bool,
     *     AfterContactWorkTimeLimit?: int,
     *     DeskPhoneNumber?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
