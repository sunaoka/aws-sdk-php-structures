<?php

namespace Sunaoka\Aws\Structures\Connect\CreateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FirstName
 * @property string|null $LastName
 * @property string|null $Email
 * @property string|null $SecondaryEmail
 * @property string|null $Mobile
 */
class UserIdentityInfo extends Shape
{
    /**
     * @param array{
     *     FirstName?: string|null,
     *     LastName?: string|null,
     *     Email?: string|null,
     *     SecondaryEmail?: string|null,
     *     Mobile?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
