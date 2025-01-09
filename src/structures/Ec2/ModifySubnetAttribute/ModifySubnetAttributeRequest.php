<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySubnetAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AttributeBooleanValue $AssignIpv6AddressOnCreation
 * @property Shapes\AttributeBooleanValue $MapPublicIpOnLaunch
 * @property string $SubnetId
 * @property Shapes\AttributeBooleanValue $MapCustomerOwnedIpOnLaunch
 * @property string $CustomerOwnedIpv4Pool
 * @property Shapes\AttributeBooleanValue $EnableDns64
 * @property 'ip-name'|'resource-name' $PrivateDnsHostnameTypeOnLaunch
 * @property Shapes\AttributeBooleanValue $EnableResourceNameDnsARecordOnLaunch
 * @property Shapes\AttributeBooleanValue $EnableResourceNameDnsAAAARecordOnLaunch
 * @property int $EnableLniAtDeviceIndex
 * @property Shapes\AttributeBooleanValue $DisableLniAtDeviceIndex
 */
class ModifySubnetAttributeRequest extends Request
{
    /**
     * @param array{
     *     AssignIpv6AddressOnCreation?: Shapes\AttributeBooleanValue,
     *     MapPublicIpOnLaunch?: Shapes\AttributeBooleanValue,
     *     SubnetId: string,
     *     MapCustomerOwnedIpOnLaunch?: Shapes\AttributeBooleanValue,
     *     CustomerOwnedIpv4Pool?: string,
     *     EnableDns64?: Shapes\AttributeBooleanValue,
     *     PrivateDnsHostnameTypeOnLaunch?: 'ip-name'|'resource-name',
     *     EnableResourceNameDnsARecordOnLaunch?: Shapes\AttributeBooleanValue,
     *     EnableResourceNameDnsAAAARecordOnLaunch?: Shapes\AttributeBooleanValue,
     *     EnableLniAtDeviceIndex?: int,
     *     DisableLniAtDeviceIndex?: Shapes\AttributeBooleanValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
