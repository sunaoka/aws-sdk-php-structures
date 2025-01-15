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
 * @property 'TLS_1_0'|'TLS_1_2'|null $securityPolicy
 * @property Shapes\MutualTlsAuthenticationInput|null $mutualTlsAuthentication
 * @property string|null $ownershipVerificationCertificateArn
 * @property string|null $policy
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
     *     securityPolicy?: 'TLS_1_0'|'TLS_1_2'|null,
     *     mutualTlsAuthentication?: Shapes\MutualTlsAuthenticationInput|null,
     *     ownershipVerificationCertificateArn?: string|null,
     *     policy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
