<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AllowedPattern
 * @property list<string>|null $AllowedValues
 * @property string|null $ConstraintDescription
 * @property string|null $DefaultValue
 * @property string|null $Description
 * @property int|null $MaxLength
 * @property int|null $MaxValue
 * @property int|null $MinLength
 * @property int|null $MinValue
 * @property string $Name
 * @property bool|null $NoEcho
 * @property list<string> $ReferencedByResources
 * @property string|null $Type
 */
class ParameterDefinition extends Shape
{
    /**
     * @param array{
     *     AllowedPattern?: string|null,
     *     AllowedValues?: list<string>|null,
     *     ConstraintDescription?: string|null,
     *     DefaultValue?: string|null,
     *     Description?: string|null,
     *     MaxLength?: int|null,
     *     MaxValue?: int|null,
     *     MinLength?: int|null,
     *     MinValue?: int|null,
     *     Name: string,
     *     NoEcho?: bool|null,
     *     ReferencedByResources: list<string>,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
