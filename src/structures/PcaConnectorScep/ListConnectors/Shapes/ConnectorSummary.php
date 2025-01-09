<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $CertificateAuthorityArn
 * @property 'GENERAL_PURPOSE'|'INTUNE' $Type
 * @property MobileDeviceManagement $MobileDeviceManagement
 * @property OpenIdConfiguration $OpenIdConfiguration
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED' $Status
 * @property 'INTERNAL_FAILURE'|'PRIVATECA_ACCESS_DENIED'|'PRIVATECA_INVALID_STATE'|'PRIVATECA_RESOURCE_NOT_FOUND' $StatusReason
 * @property string $Endpoint
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class ConnectorSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CertificateAuthorityArn?: string,
     *     Type?: 'GENERAL_PURPOSE'|'INTUNE',
     *     MobileDeviceManagement?: MobileDeviceManagement,
     *     OpenIdConfiguration?: OpenIdConfiguration,
     *     Status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED',
     *     StatusReason?: 'INTERNAL_FAILURE'|'PRIVATECA_ACCESS_DENIED'|'PRIVATECA_INVALID_STATE'|'PRIVATECA_RESOURCE_NOT_FOUND',
     *     Endpoint?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
