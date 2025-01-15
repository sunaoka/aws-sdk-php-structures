<?php

namespace Sunaoka\Aws\Structures\Connect\DescribePhoneNumber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLAIMED'|'IN_PROGRESS'|'FAILED'|null $Status
 * @property string|null $Message
 */
class PhoneNumberStatus extends Shape
{
    /**
     * @param array{
     *     Status?: 'CLAIMED'|'IN_PROGRESS'|'FAILED'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
