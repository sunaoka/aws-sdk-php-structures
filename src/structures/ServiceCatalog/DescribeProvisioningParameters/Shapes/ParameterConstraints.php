<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisioningParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AllowedValues
 * @property string|null $AllowedPattern
 * @property string|null $ConstraintDescription
 * @property string|null $MaxLength
 * @property string|null $MinLength
 * @property string|null $MaxValue
 * @property string|null $MinValue
 */
class ParameterConstraints extends Shape
{
    /**
     * @param array{
     *     AllowedValues?: list<string>|null,
     *     AllowedPattern?: string|null,
     *     ConstraintDescription?: string|null,
     *     MaxLength?: string|null,
     *     MinLength?: string|null,
     *     MaxValue?: string|null,
     *     MinValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
