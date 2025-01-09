<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpointSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'string'|'boolean'|'integer'|'enum' $Type
 * @property list<string> $EnumValues
 * @property bool $Sensitive
 * @property string $Units
 * @property string $Applicability
 * @property int $IntValueMin
 * @property int $IntValueMax
 * @property string $DefaultValue
 */
class EndpointSetting extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Type?: 'string'|'boolean'|'integer'|'enum',
     *     EnumValues?: list<string>,
     *     Sensitive?: bool,
     *     Units?: string,
     *     Applicability?: string,
     *     IntValueMin?: int,
     *     IntValueMax?: int,
     *     DefaultValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
