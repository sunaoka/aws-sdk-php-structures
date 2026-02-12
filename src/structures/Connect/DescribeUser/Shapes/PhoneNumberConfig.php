<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL' $Channel
 * @property 'SOFT_PHONE'|'DESK_PHONE' $PhoneType
 * @property string|null $PhoneNumber
 */
class PhoneNumberConfig extends Shape
{
    /**
     * @param array{
     *     Channel: 'VOICE'|'CHAT'|'TASK'|'EMAIL',
     *     PhoneType: 'SOFT_PHONE'|'DESK_PHONE',
     *     PhoneNumber?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
