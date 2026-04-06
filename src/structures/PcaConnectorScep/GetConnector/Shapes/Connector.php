<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\GetConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $CertificateAuthorityArn
 * @property 'GENERAL_PURPOSE'|'INTUNE'|null $Type
 * @property MobileDeviceManagement|null $MobileDeviceManagement
 * @property OpenIdConfiguration|null $OpenIdConfiguration
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null $Status
 * @property 'INTERNAL_FAILURE'|'PRIVATECA_ACCESS_DENIED'|'PRIVATECA_INVALID_STATE'|'PRIVATECA_RESOURCE_NOT_FOUND'|'VPC_ENDPOINT_RESOURCE_NOT_FOUND'|'VPC_ENDPOINT_DNS_ENTRIES_NOT_FOUND'|null $StatusReason
 * @property string|null $Endpoint
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class Connector extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CertificateAuthorityArn?: string|null,
     *     Type?: 'GENERAL_PURPOSE'|'INTUNE'|null,
     *     MobileDeviceManagement?: MobileDeviceManagement|null,
     *     OpenIdConfiguration?: OpenIdConfiguration|null,
     *     Status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|null,
     *     StatusReason?: 'INTERNAL_FAILURE'|'PRIVATECA_ACCESS_DENIED'|'PRIVATECA_INVALID_STATE'|'PRIVATECA_RESOURCE_NOT_FOUND'|'VPC_ENDPOINT_RESOURCE_NOT_FOUND'|'VPC_ENDPOINT_DNS_ENTRIES_NOT_FOUND'|null,
     *     Endpoint?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
