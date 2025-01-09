<?php

namespace Sunaoka\Aws\Structures\SecurityIR\CreateMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $jobTitle
 * @property string $email
 */
class IncidentResponder extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     jobTitle: string,
     *     email: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
