<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeConfigurationOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Namespace
 * @property string|null $Name
 * @property string|null $DefaultValue
 * @property string|null $ChangeSeverity
 * @property bool|null $UserDefined
 * @property 'Scalar'|'List'|null $ValueType
 * @property list<string>|null $ValueOptions
 * @property int|null $MinValue
 * @property int|null $MaxValue
 * @property int|null $MaxLength
 * @property OptionRestrictionRegex|null $Regex
 */
class ConfigurationOptionDescription extends Shape
{
    /**
     * @param array{
     *     Namespace?: string|null,
     *     Name?: string|null,
     *     DefaultValue?: string|null,
     *     ChangeSeverity?: string|null,
     *     UserDefined?: bool|null,
     *     ValueType?: 'Scalar'|'List'|null,
     *     ValueOptions?: list<string>|null,
     *     MinValue?: int|null,
     *     MaxValue?: int|null,
     *     MaxLength?: int|null,
     *     Regex?: OptionRestrictionRegex|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
