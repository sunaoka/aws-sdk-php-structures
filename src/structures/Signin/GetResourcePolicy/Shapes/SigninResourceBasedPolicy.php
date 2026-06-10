<?php

namespace Sunaoka\Aws\Structures\Signin\GetResourcePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $version
 * @property list<PolicyStatement>|null $statement
 */
class SigninResourceBasedPolicy extends Shape
{
    /**
     * @param array{
     *     version?: string|null,
     *     statement?: list<PolicyStatement>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
