<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyOptionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OptionName
 * @property int|null $Port
 * @property string|null $OptionVersion
 * @property list<string>|null $DBSecurityGroupMemberships
 * @property list<string>|null $VpcSecurityGroupMemberships
 * @property list<OptionSetting>|null $OptionSettings
 */
class OptionConfiguration extends Shape
{
    /**
     * @param array{
     *     OptionName: string,
     *     Port?: int|null,
     *     OptionVersion?: string|null,
     *     DBSecurityGroupMemberships?: list<string>|null,
     *     VpcSecurityGroupMemberships?: list<string>|null,
     *     OptionSettings?: list<OptionSetting>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
