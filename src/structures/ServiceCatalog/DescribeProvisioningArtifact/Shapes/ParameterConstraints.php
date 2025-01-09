<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisioningArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AllowedValues
 * @property string $AllowedPattern
 * @property string $ConstraintDescription
 * @property string $MaxLength
 * @property string $MinLength
 * @property string $MaxValue
 * @property string $MinValue
 */
class ParameterConstraints extends Shape
{
    /**
     * @param array{
     *     AllowedValues?: list<string>,
     *     AllowedPattern?: string,
     *     ConstraintDescription?: string,
     *     MaxLength?: string,
     *     MinLength?: string,
     *     MaxValue?: string,
     *     MinValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
