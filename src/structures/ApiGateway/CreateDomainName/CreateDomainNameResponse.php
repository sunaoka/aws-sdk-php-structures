<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateDomainName;

use Sunaoka\Aws\Structures\Response;

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
 * @property Shapes\EndpointConfiguration $endpointConfiguration
 * @property 'AVAILABLE'|'UPDATING'|'PENDING'|'PENDING_CERTIFICATE_REIMPORT'|'PENDING_OWNERSHIP_VERIFICATION' $domainNameStatus
 * @property string $domainNameStatusMessage
 * @property 'TLS_1_0'|'TLS_1_2' $securityPolicy
 * @property array<string, string> $tags
 * @property Shapes\MutualTlsAuthentication $mutualTlsAuthentication
 * @property string $ownershipVerificationCertificateArn
 * @property string $managementPolicy
 * @property string $policy
 */
class CreateDomainNameResponse extends Response
{
}
