<?php

namespace Sunaoka\Aws\Structures\Iot\CreateDomainConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainConfigurationName
 * @property string|null $domainName
 * @property list<string>|null $serverCertificateArns
 * @property string|null $validationCertificateArn
 * @property Shapes\AuthorizerConfig|null $authorizerConfig
 * @property 'DATA'|'CREDENTIAL_PROVIDER'|'JOBS'|null $serviceType
 * @property list<Shapes\Tag>|null $tags
 * @property Shapes\TlsConfig|null $tlsConfig
 */
class CreateDomainConfigurationRequest extends Request
{
    /**
     * @param array{
     *     domainConfigurationName: string,
     *     domainName?: string|null,
     *     serverCertificateArns?: list<string>|null,
     *     validationCertificateArn?: string|null,
     *     authorizerConfig?: Shapes\AuthorizerConfig|null,
     *     serviceType?: 'DATA'|'CREDENTIAL_PROVIDER'|'JOBS'|null,
     *     tags?: list<Shapes\Tag>|null,
     *     tlsConfig?: Shapes\TlsConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
