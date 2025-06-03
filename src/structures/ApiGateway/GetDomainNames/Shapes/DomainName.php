<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDomainNames\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainName
 * @property string|null $domainNameId
 * @property string|null $domainNameArn
 * @property string|null $certificateName
 * @property string|null $certificateArn
 * @property \Aws\Api\DateTimeResult|null $certificateUploadDate
 * @property string|null $regionalDomainName
 * @property string|null $regionalHostedZoneId
 * @property string|null $regionalCertificateName
 * @property string|null $regionalCertificateArn
 * @property string|null $distributionDomainName
 * @property string|null $distributionHostedZoneId
 * @property EndpointConfiguration|null $endpointConfiguration
 * @property 'AVAILABLE'|'UPDATING'|'PENDING'|'PENDING_CERTIFICATE_REIMPORT'|'PENDING_OWNERSHIP_VERIFICATION'|null $domainNameStatus
 * @property string|null $domainNameStatusMessage
 * @property 'TLS_1_0'|'TLS_1_2'|null $securityPolicy
 * @property array<string, string>|null $tags
 * @property MutualTlsAuthentication|null $mutualTlsAuthentication
 * @property string|null $ownershipVerificationCertificateArn
 * @property string|null $managementPolicy
 * @property string|null $policy
 * @property 'BASE_PATH_MAPPING_ONLY'|'ROUTING_RULE_ONLY'|'ROUTING_RULE_THEN_BASE_PATH_MAPPING'|null $routingMode
 */
class DomainName extends Shape
{
    /**
     * @param array{
     *     domainName?: string|null,
     *     domainNameId?: string|null,
     *     domainNameArn?: string|null,
     *     certificateName?: string|null,
     *     certificateArn?: string|null,
     *     certificateUploadDate?: \Aws\Api\DateTimeResult|null,
     *     regionalDomainName?: string|null,
     *     regionalHostedZoneId?: string|null,
     *     regionalCertificateName?: string|null,
     *     regionalCertificateArn?: string|null,
     *     distributionDomainName?: string|null,
     *     distributionHostedZoneId?: string|null,
     *     endpointConfiguration?: EndpointConfiguration|null,
     *     domainNameStatus?: 'AVAILABLE'|'UPDATING'|'PENDING'|'PENDING_CERTIFICATE_REIMPORT'|'PENDING_OWNERSHIP_VERIFICATION'|null,
     *     domainNameStatusMessage?: string|null,
     *     securityPolicy?: 'TLS_1_0'|'TLS_1_2'|null,
     *     tags?: array<string, string>|null,
     *     mutualTlsAuthentication?: MutualTlsAuthentication|null,
     *     ownershipVerificationCertificateArn?: string|null,
     *     managementPolicy?: string|null,
     *     policy?: string|null,
     *     routingMode?: 'BASE_PATH_MAPPING_ONLY'|'ROUTING_RULE_ONLY'|'ROUTING_RULE_THEN_BASE_PATH_MAPPING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
