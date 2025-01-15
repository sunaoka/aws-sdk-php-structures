<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySubnetAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AttributeBooleanValue|null $AssignIpv6AddressOnCreation
 * @property Shapes\AttributeBooleanValue|null $MapPublicIpOnLaunch
 * @property string $SubnetId
 * @property Shapes\AttributeBooleanValue|null $MapCustomerOwnedIpOnLaunch
 * @property string|null $CustomerOwnedIpv4Pool
 * @property Shapes\AttributeBooleanValue|null $EnableDns64
 * @property 'ip-name'|'resource-name'|null $PrivateDnsHostnameTypeOnLaunch
 * @property Shapes\AttributeBooleanValue|null $EnableResourceNameDnsARecordOnLaunch
 * @property Shapes\AttributeBooleanValue|null $EnableResourceNameDnsAAAARecordOnLaunch
 * @property int|null $EnableLniAtDeviceIndex
 * @property Shapes\AttributeBooleanValue|null $DisableLniAtDeviceIndex
 */
class ModifySubnetAttributeRequest extends Request
{
    /**
     * @param array{
     *     AssignIpv6AddressOnCreation?: Shapes\AttributeBooleanValue|null,
     *     MapPublicIpOnLaunch?: Shapes\AttributeBooleanValue|null,
     *     SubnetId: string,
     *     MapCustomerOwnedIpOnLaunch?: Shapes\AttributeBooleanValue|null,
     *     CustomerOwnedIpv4Pool?: string|null,
     *     EnableDns64?: Shapes\AttributeBooleanValue|null,
     *     PrivateDnsHostnameTypeOnLaunch?: 'ip-name'|'resource-name'|null,
     *     EnableResourceNameDnsARecordOnLaunch?: Shapes\AttributeBooleanValue|null,
     *     EnableResourceNameDnsAAAARecordOnLaunch?: Shapes\AttributeBooleanValue|null,
     *     EnableLniAtDeviceIndex?: int|null,
     *     DisableLniAtDeviceIndex?: Shapes\AttributeBooleanValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
