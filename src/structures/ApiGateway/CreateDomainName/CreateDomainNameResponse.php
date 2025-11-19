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
 * @property 'AVAILABLE'|'UPDATING'|'PENDING'|'PENDING_CERTIFICATE_REIMPORT'|'PENDING_OWNERSHIP_VERIFICATION'|'FAILED'|null $domainNameStatus
 * @property string|null $domainNameStatusMessage
 * @property 'TLS_1_0'|'TLS_1_2'|'SecurityPolicy_TLS13_1_3_2025_09'|'SecurityPolicy_TLS13_1_3_FIPS_2025_09'|'SecurityPolicy_TLS13_1_2_PFS_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_FIPS_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_2021_06'|'SecurityPolicy_TLS13_2025_EDGE'|'SecurityPolicy_TLS12_PFS_2025_EDGE'|'SecurityPolicy_TLS12_2018_EDGE'|null $securityPolicy
 * @property 'BASIC'|'STRICT'|null $endpointAccessMode
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
