<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetDomainName\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApiGatewayDomainName
 * @property string $CertificateArn
 * @property string $CertificateName
 * @property \Aws\Api\DateTimeResult $CertificateUploadDate
 * @property 'AVAILABLE'|'UPDATING'|'PENDING_CERTIFICATE_REIMPORT'|'PENDING_OWNERSHIP_VERIFICATION' $DomainNameStatus
 * @property string $DomainNameStatusMessage
 * @property 'REGIONAL'|'EDGE' $EndpointType
 * @property string $HostedZoneId
 * @property 'TLS_1_0'|'TLS_1_2' $SecurityPolicy
 * @property string $OwnershipVerificationCertificateArn
 */
class DomainNameConfiguration extends Shape
{
    /**
     * @param array{
     *     ApiGatewayDomainName?: string,
     *     CertificateArn?: string,
     *     CertificateName?: string,
     *     CertificateUploadDate?: \Aws\Api\DateTimeResult,
     *     DomainNameStatus?: 'AVAILABLE'|'UPDATING'|'PENDING_CERTIFICATE_REIMPORT'|'PENDING_OWNERSHIP_VERIFICATION',
     *     DomainNameStatusMessage?: string,
     *     EndpointType?: 'REGIONAL'|'EDGE',
     *     HostedZoneId?: string,
     *     SecurityPolicy?: 'TLS_1_0'|'TLS_1_2',
     *     OwnershipVerificationCertificateArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
