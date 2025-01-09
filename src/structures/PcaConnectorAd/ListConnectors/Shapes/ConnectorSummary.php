<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $CertificateAuthorityArn
 * @property string $CertificateEnrollmentPolicyServerEndpoint
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $DirectoryId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED' $Status
 * @property 'DIRECTORY_ACCESS_DENIED'|'INTERNAL_FAILURE'|'PRIVATECA_ACCESS_DENIED'|'PRIVATECA_RESOURCE_NOT_FOUND'|'SECURITY_GROUP_NOT_IN_VPC'|'VPC_ACCESS_DENIED'|'VPC_ENDPOINT_LIMIT_EXCEEDED'|'VPC_RESOURCE_NOT_FOUND' $StatusReason
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property VpcInformation $VpcInformation
 */
class ConnectorSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CertificateAuthorityArn?: string,
     *     CertificateEnrollmentPolicyServerEndpoint?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     DirectoryId?: string,
     *     Status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED',
     *     StatusReason?: 'DIRECTORY_ACCESS_DENIED'|'INTERNAL_FAILURE'|'PRIVATECA_ACCESS_DENIED'|'PRIVATECA_RESOURCE_NOT_FOUND'|'SECURITY_GROUP_NOT_IN_VPC'|'VPC_ACCESS_DENIED'|'VPC_ENDPOINT_LIMIT_EXCEEDED'|'VPC_RESOURCE_NOT_FOUND',
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     VpcInformation?: VpcInformation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
