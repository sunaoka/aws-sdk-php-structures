<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetDirectConnectGatewayAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VPC_NOT_FOUND'|'SUBNET_NOT_FOUND'|'SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE'|'SUBNET_NO_FREE_ADDRESSES'|'SUBNET_UNSUPPORTED_AVAILABILITY_ZONE'|'SUBNET_NO_IPV6_CIDRS'|'VPN_CONNECTION_NOT_FOUND'|'MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED'|'DIRECT_CONNECT_GATEWAY_NOT_FOUND'|'DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS'|'DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF' $Code
 * @property string $Message
 * @property string $ResourceArn
 * @property string $RequestId
 */
class AttachmentError extends Shape
{
    /**
     * @param array{
     *     Code?: 'VPC_NOT_FOUND'|'SUBNET_NOT_FOUND'|'SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE'|'SUBNET_NO_FREE_ADDRESSES'|'SUBNET_UNSUPPORTED_AVAILABILITY_ZONE'|'SUBNET_NO_IPV6_CIDRS'|'VPN_CONNECTION_NOT_FOUND'|'MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED'|'DIRECT_CONNECT_GATEWAY_NOT_FOUND'|'DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS'|'DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF',
     *     Message?: string,
     *     ResourceArn?: string,
     *     RequestId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
