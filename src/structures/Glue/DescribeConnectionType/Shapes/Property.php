<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property bool $Required
 * @property string|null $DefaultValue
 * @property list<'USER_INPUT'|'SECRET'|'READ_ONLY'|'UNUSED'|'SECRET_OR_USER_INPUT'> $PropertyTypes
 * @property list<AllowedValue>|null $AllowedValues
 * @property list<'READ'|'WRITE'>|null $DataOperationScopes
 * @property string|null $KeyOverride
 * @property 'HEADER'|'BODY'|'QUERY_PARAM'|'PATH'|null $PropertyLocation
 */
class Property extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description: string,
     *     Required: bool,
     *     DefaultValue?: string|null,
     *     PropertyTypes: list<'USER_INPUT'|'SECRET'|'READ_ONLY'|'UNUSED'|'SECRET_OR_USER_INPUT'>,
     *     AllowedValues?: list<AllowedValue>|null,
     *     DataOperationScopes?: list<'READ'|'WRITE'>|null,
     *     KeyOverride?: string|null,
     *     PropertyLocation?: 'HEADER'|'BODY'|'QUERY_PARAM'|'PATH'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
