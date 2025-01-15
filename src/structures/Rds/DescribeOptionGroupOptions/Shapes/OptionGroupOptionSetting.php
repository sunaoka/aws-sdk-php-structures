<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOptionGroupOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SettingName
 * @property string|null $SettingDescription
 * @property string|null $DefaultValue
 * @property string|null $ApplyType
 * @property string|null $AllowedValues
 * @property bool|null $IsModifiable
 * @property bool|null $IsRequired
 * @property list<MinimumEngineVersionPerAllowedValue>|null $MinimumEngineVersionPerAllowedValue
 */
class OptionGroupOptionSetting extends Shape
{
    /**
     * @param array{
     *     SettingName?: string|null,
     *     SettingDescription?: string|null,
     *     DefaultValue?: string|null,
     *     ApplyType?: string|null,
     *     AllowedValues?: string|null,
     *     IsModifiable?: bool|null,
     *     IsRequired?: bool|null,
     *     MinimumEngineVersionPerAllowedValue?: list<MinimumEngineVersionPerAllowedValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
