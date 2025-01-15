<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetTemplateSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AllowedValues
 */
class ParameterConstraints extends Shape
{
    /**
     * @param array{AllowedValues?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
