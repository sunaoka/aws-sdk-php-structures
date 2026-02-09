<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $KeyOverride
 * @property bool $Required
 * @property string|null $DefaultValue
 * @property list<string>|null $AllowedValues
 * @property 'HEADER'|'BODY'|'QUERY_PARAM'|'PATH'|null $PropertyLocation
 * @property 'USER_INPUT'|'SECRET'|'READ_ONLY'|'UNUSED'|'SECRET_OR_USER_INPUT' $PropertyType
 */
class ConnectorProperty extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     KeyOverride?: string|null,
     *     Required: bool,
     *     DefaultValue?: string|null,
     *     AllowedValues?: list<string>|null,
     *     PropertyLocation?: 'HEADER'|'BODY'|'QUERY_PARAM'|'PATH'|null,
     *     PropertyType: 'USER_INPUT'|'SECRET'|'READ_ONLY'|'UNUSED'|'SECRET_OR_USER_INPUT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
