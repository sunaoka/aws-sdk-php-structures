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
 * @property Shapes\ServerCertificateConfig|null $serverCertificateConfig
 * @property 'CUSTOM_AUTH_X509'|'CUSTOM_AUTH'|'AWS_X509'|'AWS_SIGV4'|'DEFAULT'|null $authenticationType
 * @property 'SECURE_MQTT'|'MQTT_WSS'|'HTTPS'|'DEFAULT'|null $applicationProtocol
 * @property Shapes\ClientCertificateConfig|null $clientCertificateConfig
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
     *     tlsConfig?: Shapes\TlsConfig|null,
     *     serverCertificateConfig?: Shapes\ServerCertificateConfig|null,
     *     authenticationType?: 'CUSTOM_AUTH_X509'|'CUSTOM_AUTH'|'AWS_X509'|'AWS_SIGV4'|'DEFAULT'|null,
     *     applicationProtocol?: 'SECURE_MQTT'|'MQTT_WSS'|'HTTPS'|'DEFAULT'|null,
     *     clientCertificateConfig?: Shapes\ClientCertificateConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
