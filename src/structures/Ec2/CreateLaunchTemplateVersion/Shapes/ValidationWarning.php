<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ValidationError> $Errors
 */
class ValidationWarning extends Shape
{
    /**
     * @param array{Errors?: list<ValidationError>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
