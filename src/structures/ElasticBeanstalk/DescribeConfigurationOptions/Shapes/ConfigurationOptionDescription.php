<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeConfigurationOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Namespace
 * @property string $Name
 * @property string $DefaultValue
 * @property string $ChangeSeverity
 * @property bool $UserDefined
 * @property 'Scalar'|'List' $ValueType
 * @property list<string> $ValueOptions
 * @property int $MinValue
 * @property int $MaxValue
 * @property int $MaxLength
 * @property OptionRestrictionRegex $Regex
 */
class ConfigurationOptionDescription extends Shape
{
    /**
     * @param array{
     *     Namespace?: string,
     *     Name?: string,
     *     DefaultValue?: string,
     *     ChangeSeverity?: string,
     *     UserDefined?: bool,
     *     ValueType?: 'Scalar'|'List',
     *     ValueOptions?: list<string>,
     *     MinValue?: int,
     *     MaxValue?: int,
     *     MaxLength?: int,
     *     Regex?: OptionRestrictionRegex
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
