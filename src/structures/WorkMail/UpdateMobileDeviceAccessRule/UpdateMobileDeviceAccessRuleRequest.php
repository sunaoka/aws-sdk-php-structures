<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdateMobileDeviceAccessRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $MobileDeviceAccessRuleId
 * @property string $Name
 * @property string $Description
 * @property 'ALLOW'|'DENY' $Effect
 * @property list<string> $DeviceTypes
 * @property list<string> $NotDeviceTypes
 * @property list<string> $DeviceModels
 * @property list<string> $NotDeviceModels
 * @property list<string> $DeviceOperatingSystems
 * @property list<string> $NotDeviceOperatingSystems
 * @property list<string> $DeviceUserAgents
 * @property list<string> $NotDeviceUserAgents
 */
class UpdateMobileDeviceAccessRuleRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     MobileDeviceAccessRuleId: string,
     *     Name: string,
     *     Description?: string,
     *     Effect: 'ALLOW'|'DENY',
     *     DeviceTypes?: list<string>,
     *     NotDeviceTypes?: list<string>,
     *     DeviceModels?: list<string>,
     *     NotDeviceModels?: list<string>,
     *     DeviceOperatingSystems?: list<string>,
     *     NotDeviceOperatingSystems?: list<string>,
     *     DeviceUserAgents?: list<string>,
     *     NotDeviceUserAgents?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
