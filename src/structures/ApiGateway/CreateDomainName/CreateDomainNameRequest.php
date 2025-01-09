<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateDomainName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property string $certificateName
 * @property string $certificateBody
 * @property string $certificatePrivateKey
 * @property string $certificateChain
 * @property string $certificateArn
 * @property string $regionalCertificateName
 * @property string $regionalCertificateArn
 * @property Shapes\EndpointConfiguration $endpointConfiguration
 * @property array<string, string> $tags
 * @property 'TLS_1_0'|'TLS_1_2' $securityPolicy
 * @property Shapes\MutualTlsAuthenticationInput $mutualTlsAuthentication
 * @property string $ownershipVerificationCertificateArn
 * @property string $policy
 */
class CreateDomainNameRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     certificateName?: string,
     *     certificateBody?: string,
     *     certificatePrivateKey?: string,
     *     certificateChain?: string,
     *     certificateArn?: string,
     *     regionalCertificateName?: string,
     *     regionalCertificateArn?: string,
     *     endpointConfiguration?: Shapes\EndpointConfiguration,
     *     tags?: array<string, string>,
     *     securityPolicy?: 'TLS_1_0'|'TLS_1_2',
     *     mutualTlsAuthentication?: Shapes\MutualTlsAuthenticationInput,
     *     ownershipVerificationCertificateArn?: string,
     *     policy?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
