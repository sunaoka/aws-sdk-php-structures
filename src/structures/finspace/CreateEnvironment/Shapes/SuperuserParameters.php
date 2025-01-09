<?php

namespace Sunaoka\Aws\Structures\finspace\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $emailAddress
 * @property string $firstName
 * @property string $lastName
 */
class SuperuserParameters extends Shape
{
    /**
     * @param array{
     *     emailAddress: string,
     *     firstName: string,
     *     lastName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
