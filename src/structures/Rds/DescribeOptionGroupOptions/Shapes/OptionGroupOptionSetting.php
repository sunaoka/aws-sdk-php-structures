<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOptionGroupOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SettingName
 * @property string $SettingDescription
 * @property string $DefaultValue
 * @property string $ApplyType
 * @property string $AllowedValues
 * @property bool $IsModifiable
 * @property bool $IsRequired
 * @property list<MinimumEngineVersionPerAllowedValue> $MinimumEngineVersionPerAllowedValue
 */
class OptionGroupOptionSetting extends Shape
{
    /**
     * @param array{
     *     SettingName?: string,
     *     SettingDescription?: string,
     *     DefaultValue?: string,
     *     ApplyType?: string,
     *     AllowedValues?: string,
     *     IsModifiable?: bool,
     *     IsRequired?: bool,
     *     MinimumEngineVersionPerAllowedValue?: list<MinimumEngineVersionPerAllowedValue>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
