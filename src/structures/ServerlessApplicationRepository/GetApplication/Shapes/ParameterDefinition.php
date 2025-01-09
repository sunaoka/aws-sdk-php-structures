<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AllowedPattern
 * @property list<string> $AllowedValues
 * @property string $ConstraintDescription
 * @property string $DefaultValue
 * @property string $Description
 * @property int $MaxLength
 * @property int $MaxValue
 * @property int $MinLength
 * @property int $MinValue
 * @property string $Name
 * @property bool $NoEcho
 * @property list<string> $ReferencedByResources
 * @property string $Type
 */
class ParameterDefinition extends Shape
{
    /**
     * @param array{
     *     AllowedPattern?: string,
     *     AllowedValues?: list<string>,
     *     ConstraintDescription?: string,
     *     DefaultValue?: string,
     *     Description?: string,
     *     MaxLength?: int,
     *     MaxValue?: int,
     *     MinLength?: int,
     *     MinValue?: int,
     *     Name: string,
     *     NoEcho?: bool,
     *     ReferencedByResources: list<string>,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
