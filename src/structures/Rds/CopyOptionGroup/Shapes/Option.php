<?php

namespace Sunaoka\Aws\Structures\Rds\CopyOptionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OptionName
 * @property string $OptionDescription
 * @property bool $Persistent
 * @property bool $Permanent
 * @property int $Port
 * @property string $OptionVersion
 * @property list<OptionSetting> $OptionSettings
 * @property list<DBSecurityGroupMembership> $DBSecurityGroupMemberships
 * @property list<VpcSecurityGroupMembership> $VpcSecurityGroupMemberships
 */
class Option extends Shape
{
    /**
     * @param array{
     *     OptionName?: string,
     *     OptionDescription?: string,
     *     Persistent?: bool,
     *     Permanent?: bool,
     *     Port?: int,
     *     OptionVersion?: string,
     *     OptionSettings?: list<OptionSetting>,
     *     DBSecurityGroupMemberships?: list<DBSecurityGroupMembership>,
     *     VpcSecurityGroupMemberships?: list<VpcSecurityGroupMembership>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
