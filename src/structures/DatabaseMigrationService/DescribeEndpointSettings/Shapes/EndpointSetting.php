<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpointSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'string'|'boolean'|'integer'|'enum'|null $Type
 * @property list<string>|null $EnumValues
 * @property bool|null $Sensitive
 * @property string|null $Units
 * @property string|null $Applicability
 * @property int|null $IntValueMin
 * @property int|null $IntValueMax
 * @property string|null $DefaultValue
 */
class EndpointSetting extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Type?: 'string'|'boolean'|'integer'|'enum'|null,
     *     EnumValues?: list<string>|null,
     *     Sensitive?: bool|null,
     *     Units?: string|null,
     *     Applicability?: string|null,
     *     IntValueMin?: int|null,
     *     IntValueMax?: int|null,
     *     DefaultValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
