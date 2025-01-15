<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMobileDeviceAccessRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MobileDeviceAccessRuleId
 * @property string|null $Name
 * @property string|null $Description
 * @property 'ALLOW'|'DENY'|null $Effect
 * @property list<string>|null $DeviceTypes
 * @property list<string>|null $NotDeviceTypes
 * @property list<string>|null $DeviceModels
 * @property list<string>|null $NotDeviceModels
 * @property list<string>|null $DeviceOperatingSystems
 * @property list<string>|null $NotDeviceOperatingSystems
 * @property list<string>|null $DeviceUserAgents
 * @property list<string>|null $NotDeviceUserAgents
 * @property \Aws\Api\DateTimeResult|null $DateCreated
 * @property \Aws\Api\DateTimeResult|null $DateModified
 */
class MobileDeviceAccessRule extends Shape
{
    /**
     * @param array{
     *     MobileDeviceAccessRuleId?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Effect?: 'ALLOW'|'DENY'|null,
     *     DeviceTypes?: list<string>|null,
     *     NotDeviceTypes?: list<string>|null,
     *     DeviceModels?: list<string>|null,
     *     NotDeviceModels?: list<string>|null,
     *     DeviceOperatingSystems?: list<string>|null,
     *     NotDeviceOperatingSystems?: list<string>|null,
     *     DeviceUserAgents?: list<string>|null,
     *     NotDeviceUserAgents?: list<string>|null,
     *     DateCreated?: \Aws\Api\DateTimeResult|null,
     *     DateModified?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
