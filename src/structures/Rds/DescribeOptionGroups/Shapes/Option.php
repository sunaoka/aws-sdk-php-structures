<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOptionGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OptionName
 * @property string|null $OptionDescription
 * @property bool|null $Persistent
 * @property bool|null $Permanent
 * @property int|null $Port
 * @property string|null $OptionVersion
 * @property list<OptionSetting>|null $OptionSettings
 * @property list<DBSecurityGroupMembership>|null $DBSecurityGroupMemberships
 * @property list<VpcSecurityGroupMembership>|null $VpcSecurityGroupMemberships
 */
class Option extends Shape
{
    /**
     * @param array{
     *     OptionName?: string|null,
     *     OptionDescription?: string|null,
     *     Persistent?: bool|null,
     *     Permanent?: bool|null,
     *     Port?: int|null,
     *     OptionVersion?: string|null,
     *     OptionSettings?: list<OptionSetting>|null,
     *     DBSecurityGroupMemberships?: list<DBSecurityGroupMembership>|null,
     *     VpcSecurityGroupMemberships?: list<VpcSecurityGroupMembership>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
