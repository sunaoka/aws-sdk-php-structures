<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDomainNames\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainName
 * @property string $domainNameId
 * @property string $domainNameArn
 * @property string $certificateName
 * @property string $certificateArn
 * @property \Aws\Api\DateTimeResult $certificateUploadDate
 * @property string $regionalDomainName
 * @property string $regionalHostedZoneId
 * @property string $regionalCertificateName
 * @property string $regionalCertificateArn
 * @property string $distributionDomainName
 * @property string $distributionHostedZoneId
 * @property EndpointConfiguration $endpointConfiguration
 * @property 'AVAILABLE'|'UPDATING'|'PENDING'|'PENDING_CERTIFICATE_REIMPORT'|'PENDING_OWNERSHIP_VERIFICATION' $domainNameStatus
 * @property string $domainNameStatusMessage
 * @property 'TLS_1_0'|'TLS_1_2' $securityPolicy
 * @property array<string, string> $tags
 * @property MutualTlsAuthentication $mutualTlsAuthentication
 * @property string $ownershipVerificationCertificateArn
 * @property string $managementPolicy
 * @property string $policy
 */
class DomainName extends Shape
{
    /**
     * @param array{
     *     domainName?: string,
     *     domainNameId?: string,
     *     domainNameArn?: string,
     *     certificateName?: string,
     *     certificateArn?: string,
     *     certificateUploadDate?: \Aws\Api\DateTimeResult,
     *     regionalDomainName?: string,
     *     regionalHostedZoneId?: string,
     *     regionalCertificateName?: string,
     *     regionalCertificateArn?: string,
     *     distributionDomainName?: string,
     *     distributionHostedZoneId?: string,
     *     endpointConfiguration?: EndpointConfiguration,
     *     domainNameStatus?: 'AVAILABLE'|'UPDATING'|'PENDING'|'PENDING_CERTIFICATE_REIMPORT'|'PENDING_OWNERSHIP_VERIFICATION',
     *     domainNameStatusMessage?: string,
     *     securityPolicy?: 'TLS_1_0'|'TLS_1_2',
     *     tags?: array<string, string>,
     *     mutualTlsAuthentication?: MutualTlsAuthentication,
     *     ownershipVerificationCertificateArn?: string,
     *     managementPolicy?: string,
     *     policy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
