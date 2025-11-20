<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateDomainName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property string|null $certificateName
 * @property string|null $certificateBody
 * @property string|null $certificatePrivateKey
 * @property string|null $certificateChain
 * @property string|null $certificateArn
 * @property string|null $regionalCertificateName
 * @property string|null $regionalCertificateArn
 * @property Shapes\EndpointConfiguration|null $endpointConfiguration
 * @property array<string, string>|null $tags
 * @property 'TLS_1_0'|'TLS_1_2'|'SecurityPolicy_TLS13_1_3_2025_09'|'SecurityPolicy_TLS13_1_3_FIPS_2025_09'|'SecurityPolicy_TLS13_1_2_PFS_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_FIPS_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_2021_06'|'SecurityPolicy_TLS13_2025_EDGE'|'SecurityPolicy_TLS12_PFS_2025_EDGE'|'SecurityPolicy_TLS12_2018_EDGE'|null $securityPolicy
 * @property 'BASIC'|'STRICT'|null $endpointAccessMode
 * @property Shapes\MutualTlsAuthenticationInput|null $mutualTlsAuthentication
 * @property string|null $ownershipVerificationCertificateArn
 * @property string|null $policy
 * @property 'BASE_PATH_MAPPING_ONLY'|'ROUTING_RULE_ONLY'|'ROUTING_RULE_THEN_BASE_PATH_MAPPING'|null $routingMode
 */
class CreateDomainNameRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     certificateName?: string|null,
     *     certificateBody?: string|null,
     *     certificatePrivateKey?: string|null,
     *     certificateChain?: string|null,
     *     certificateArn?: string|null,
     *     regionalCertificateName?: string|null,
     *     regionalCertificateArn?: string|null,
     *     endpointConfiguration?: Shapes\EndpointConfiguration|null,
     *     tags?: array<string, string>|null,
     *     securityPolicy?: 'TLS_1_0'|'TLS_1_2'|'SecurityPolicy_TLS13_1_3_2025_09'|'SecurityPolicy_TLS13_1_3_FIPS_2025_09'|'SecurityPolicy_TLS13_1_2_PFS_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_FIPS_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_PQ_2025_09'|'SecurityPolicy_TLS13_1_2_2021_06'|'SecurityPolicy_TLS13_2025_EDGE'|'SecurityPolicy_TLS12_PFS_2025_EDGE'|'SecurityPolicy_TLS12_2018_EDGE'|null,
     *     endpointAccessMode?: 'BASIC'|'STRICT'|null,
     *     mutualTlsAuthentication?: Shapes\MutualTlsAuthenticationInput|null,
     *     ownershipVerificationCertificateArn?: string|null,
     *     policy?: string|null,
     *     routingMode?: 'BASE_PATH_MAPPING_ONLY'|'ROUTING_RULE_ONLY'|'ROUTING_RULE_THEN_BASE_PATH_MAPPING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
