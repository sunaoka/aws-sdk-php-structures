<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property bool $Required
 * @property string $DefaultValue
 * @property list<'USER_INPUT'|'SECRET'|'READ_ONLY'|'UNUSED'|'SECRET_OR_USER_INPUT'> $PropertyTypes
 * @property list<AllowedValue> $AllowedValues
 * @property list<'READ'|'WRITE'> $DataOperationScopes
 */
class Property extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description: string,
     *     Required: bool,
     *     DefaultValue?: string,
     *     PropertyTypes: list<'USER_INPUT'|'SECRET'|'READ_ONLY'|'UNUSED'|'SECRET_OR_USER_INPUT'>,
     *     AllowedValues?: list<AllowedValue>,
     *     DataOperationScopes?: list<'READ'|'WRITE'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
