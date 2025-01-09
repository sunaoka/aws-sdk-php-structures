<?php

namespace Sunaoka\Aws\Structures\Connect\DescribePhoneNumber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLAIMED'|'IN_PROGRESS'|'FAILED' $Status
 * @property string $Message
 */
class PhoneNumberStatus extends Shape
{
    /**
     * @param array{
     *     Status?: 'CLAIMED'|'IN_PROGRESS'|'FAILED',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
