<?php

namespace Sunaoka\Aws\Structures\Sns\ListSMSSandboxPhoneNumbers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PhoneNumber
 * @property 'Pending'|'Verified' $Status
 */
class SMSSandboxPhoneNumber extends Shape
{
    /**
     * @param array{
     *     PhoneNumber?: string,
     *     Status?: 'Pending'|'Verified'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
