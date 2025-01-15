<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\GetUserDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $email
 * @property bool|null $verified
 */
class EmailAddress extends Shape
{
    /**
     * @param array{
     *     email?: string|null,
     *     verified?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
