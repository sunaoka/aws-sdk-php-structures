<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\GetUserDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $email
 * @property bool $verified
 */
class EmailAddress extends Shape
{
    /**
     * @param array{
     *     email?: string,
     *     verified?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
