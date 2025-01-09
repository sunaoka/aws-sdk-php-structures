<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOptionGroupOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property string $EngineName
 * @property string $MajorEngineVersion
 * @property string $MinimumRequiredMinorEngineVersion
 * @property bool $PortRequired
 * @property int $DefaultPort
 * @property list<string> $OptionsDependedOn
 * @property list<string> $OptionsConflictsWith
 * @property bool $Persistent
 * @property bool $Permanent
 * @property bool $RequiresAutoMinorEngineVersionUpgrade
 * @property bool $VpcOnly
 * @property bool $SupportsOptionVersionDowngrade
 * @property list<OptionGroupOptionSetting> $OptionGroupOptionSettings
 * @property list<OptionVersion> $OptionGroupOptionVersions
 * @property bool $CopyableCrossAccount
 */
class OptionGroupOption extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     EngineName?: string,
     *     MajorEngineVersion?: string,
     *     MinimumRequiredMinorEngineVersion?: string,
     *     PortRequired?: bool,
     *     DefaultPort?: int,
     *     OptionsDependedOn?: list<string>,
     *     OptionsConflictsWith?: list<string>,
     *     Persistent?: bool,
     *     Permanent?: bool,
     *     RequiresAutoMinorEngineVersionUpgrade?: bool,
     *     VpcOnly?: bool,
     *     SupportsOptionVersionDowngrade?: bool,
     *     OptionGroupOptionSettings?: list<OptionGroupOptionSetting>,
     *     OptionGroupOptionVersions?: list<OptionVersion>,
     *     CopyableCrossAccount?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
