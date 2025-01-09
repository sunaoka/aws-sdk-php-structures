<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SOFT_PHONE'|'DESK_PHONE' $PhoneType
 * @property bool $AutoAccept
 * @property int<0, max> $AfterContactWorkTimeLimit
 * @property string $DeskPhoneNumber
 */
class UserPhoneConfig extends Shape
{
    /**
     * @param array{
     *     PhoneType: 'SOFT_PHONE'|'DESK_PHONE',
     *     AutoAccept?: bool,
     *     AfterContactWorkTimeLimit?: int<0, max>,
     *     DeskPhoneNumber?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
