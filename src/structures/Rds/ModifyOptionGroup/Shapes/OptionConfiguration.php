<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyOptionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OptionName
 * @property int $Port
 * @property string $OptionVersion
 * @property list<string> $DBSecurityGroupMemberships
 * @property list<string> $VpcSecurityGroupMemberships
 * @property list<OptionSetting> $OptionSettings
 */
class OptionConfiguration extends Shape
{
    /**
     * @param array{
     *     OptionName: string,
     *     Port?: int,
     *     OptionVersion?: string,
     *     DBSecurityGroupMemberships?: list<string>,
     *     VpcSecurityGroupMemberships?: list<string>,
     *     OptionSettings?: list<OptionSetting>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
