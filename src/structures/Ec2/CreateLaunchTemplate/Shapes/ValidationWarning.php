<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ValidationError>|null $Errors
 */
class ValidationWarning extends Shape
{
    /**
     * @param array{Errors?: list<ValidationError>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
