<?php

namespace Sunaoka\Aws\Structures\Sns\ListSMSSandboxPhoneNumbers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PhoneNumber
 * @property 'Pending'|'Verified'|null $Status
 */
class SMSSandboxPhoneNumber extends Shape
{
    /**
     * @param array{
     *     PhoneNumber?: string|null,
     *     Status?: 'Pending'|'Verified'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
