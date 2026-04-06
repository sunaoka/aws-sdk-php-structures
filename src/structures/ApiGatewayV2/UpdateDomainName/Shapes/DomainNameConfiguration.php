<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateDomainName\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApiGatewayDomainName
 * @property string|null $CertificateArn
 * @property string|null $CertificateName
 * @property \Aws\Api\DateTimeResult|null $CertificateUploadDate
 * @property 'AVAILABLE'|'UPDATING'|'PENDING_CERTIFICATE_REIMPORT'|'PENDING_OWNERSHIP_VERIFICATION'|null $DomainNameStatus
 * @property string|null $DomainNameStatusMessage
 * @property 'REGIONAL'|'EDGE'|null $EndpointType
 * @property string|null $HostedZoneId
 * @property 'TLS_1_0'|'TLS_1_2'|null $SecurityPolicy
 * @property string|null $OwnershipVerificationCertificateArn
 */
class DomainNameConfiguration extends Shape
{
    /**
     * @param array{
     *     ApiGatewayDomainName?: string|null,
     *     CertificateArn?: string|null,
     *     CertificateName?: string|null,
     *     CertificateUploadDate?: \Aws\Api\DateTimeResult|null,
     *     DomainNameStatus?: 'AVAILABLE'|'UPDATING'|'PENDING_CERTIFICATE_REIMPORT'|'PENDING_OWNERSHIP_VERIFICATION'|null,
     *     DomainNameStatusMessage?: string|null,
     *     EndpointType?: 'REGIONAL'|'EDGE'|null,
     *     HostedZoneId?: string|null,
     *     SecurityPolicy?: 'TLS_1_0'|'TLS_1_2'|null,
     *     OwnershipVerificationCertificateArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
