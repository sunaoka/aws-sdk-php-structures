<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FirstName
 * @property string $LastName
 * @property string $Email
 * @property string $SecondaryEmail
 * @property string $Mobile
 */
class UserIdentityInfo extends Shape
{
    /**
     * @param array{
     *     FirstName?: string,
     *     LastName?: string,
     *     Email?: string,
     *     SecondaryEmail?: string,
     *     Mobile?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
