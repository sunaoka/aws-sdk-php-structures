<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdateMobileDeviceAccessRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $MobileDeviceAccessRuleId
 * @property string $Name
 * @property string|null $Description
 * @property 'ALLOW'|'DENY' $Effect
 * @property list<string>|null $DeviceTypes
 * @property list<string>|null $NotDeviceTypes
 * @property list<string>|null $DeviceModels
 * @property list<string>|null $NotDeviceModels
 * @property list<string>|null $DeviceOperatingSystems
 * @property list<string>|null $NotDeviceOperatingSystems
 * @property list<string>|null $DeviceUserAgents
 * @property list<string>|null $NotDeviceUserAgents
 */
class UpdateMobileDeviceAccessRuleRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     MobileDeviceAccessRuleId: string,
     *     Name: string,
     *     Description?: string|null,
     *     Effect: 'ALLOW'|'DENY',
     *     DeviceTypes?: list<string>|null,
     *     NotDeviceTypes?: list<string>|null,
     *     DeviceModels?: list<string>|null,
     *     NotDeviceModels?: list<string>|null,
     *     DeviceOperatingSystems?: list<string>|null,
     *     NotDeviceOperatingSystems?: list<string>|null,
     *     DeviceUserAgents?: list<string>|null,
     *     NotDeviceUserAgents?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
