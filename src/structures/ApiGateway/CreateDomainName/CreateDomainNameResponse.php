<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateDomainName;

use Sunaoka\Aws\Structures\Response;

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
 * @property Shapes\EndpointConfiguration|null $endpointConfiguration
 * @property 'AVAILABLE'|'UPDATING'|'PENDING'|'PENDING_CERTIFICATE_REIMPORT'|'PENDING_OWNERSHIP_VERIFICATION'|null $domainNameStatus
 * @property string|null $domainNameStatusMessage
 * @property 'TLS_1_0'|'TLS_1_2'|null $securityPolicy
 * @property array<string, string>|null $tags
 * @property Shapes\MutualTlsAuthentication|null $mutualTlsAuthentication
 * @property string|null $ownershipVerificationCertificateArn
 * @property string|null $managementPolicy
 * @property string|null $policy
 * @property 'BASE_PATH_MAPPING_ONLY'|'ROUTING_RULE_ONLY'|'ROUTING_RULE_THEN_BASE_PATH_MAPPING'|null $routingMode
 */
class CreateDomainNameResponse extends Response
{
}
