<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOptionGroupOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $EngineName
 * @property string|null $MajorEngineVersion
 * @property string|null $MinimumRequiredMinorEngineVersion
 * @property bool|null $PortRequired
 * @property int|null $DefaultPort
 * @property list<string>|null $OptionsDependedOn
 * @property list<string>|null $OptionsConflictsWith
 * @property bool|null $Persistent
 * @property bool|null $Permanent
 * @property bool|null $RequiresAutoMinorEngineVersionUpgrade
 * @property bool|null $VpcOnly
 * @property bool|null $SupportsOptionVersionDowngrade
 * @property list<OptionGroupOptionSetting>|null $OptionGroupOptionSettings
 * @property list<OptionVersion>|null $OptionGroupOptionVersions
 * @property bool|null $CopyableCrossAccount
 */
class OptionGroupOption extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     EngineName?: string|null,
     *     MajorEngineVersion?: string|null,
     *     MinimumRequiredMinorEngineVersion?: string|null,
     *     PortRequired?: bool|null,
     *     DefaultPort?: int|null,
     *     OptionsDependedOn?: list<string>|null,
     *     OptionsConflictsWith?: list<string>|null,
     *     Persistent?: bool|null,
     *     Permanent?: bool|null,
     *     RequiresAutoMinorEngineVersionUpgrade?: bool|null,
     *     VpcOnly?: bool|null,
     *     SupportsOptionVersionDowngrade?: bool|null,
     *     OptionGroupOptionSettings?: list<OptionGroupOptionSetting>|null,
     *     OptionGroupOptionVersions?: list<OptionVersion>|null,
     *     CopyableCrossAccount?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
