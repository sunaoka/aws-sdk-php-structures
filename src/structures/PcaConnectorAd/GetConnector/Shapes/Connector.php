<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $CertificateAuthorityArn
 * @property string|null $CertificateEnrollmentPolicyServerEndpoint
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $DirectoryId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null $Status
 * @property 'CA_CERTIFICATE_REGISTRATION_FAILED'|'DIRECTORY_ACCESS_DENIED'|'INTERNAL_FAILURE'|'INSUFFICIENT_FREE_ADDRESSES'|'INVALID_SUBNET_IP_PROTOCOL'|'PRIVATECA_ACCESS_DENIED'|'PRIVATECA_RESOURCE_NOT_FOUND'|'SECURITY_GROUP_NOT_IN_VPC'|'VPC_ACCESS_DENIED'|'VPC_ENDPOINT_LIMIT_EXCEEDED'|'VPC_RESOURCE_NOT_FOUND'|null $StatusReason
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property VpcInformation|null $VpcInformation
 */
class Connector extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CertificateAuthorityArn?: string|null,
     *     CertificateEnrollmentPolicyServerEndpoint?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     DirectoryId?: string|null,
     *     Status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null,
     *     StatusReason?: 'CA_CERTIFICATE_REGISTRATION_FAILED'|'DIRECTORY_ACCESS_DENIED'|'INTERNAL_FAILURE'|'INSUFFICIENT_FREE_ADDRESSES'|'INVALID_SUBNET_IP_PROTOCOL'|'PRIVATECA_ACCESS_DENIED'|'PRIVATECA_RESOURCE_NOT_FOUND'|'SECURITY_GROUP_NOT_IN_VPC'|'VPC_ACCESS_DENIED'|'VPC_ENDPOINT_LIMIT_EXCEEDED'|'VPC_RESOURCE_NOT_FOUND'|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     VpcInformation?: VpcInformation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
