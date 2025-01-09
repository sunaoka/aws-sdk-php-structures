<?php

namespace Sunaoka\Aws\Structures\Iot\CreateDomainConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainConfigurationName
 * @property string $domainName
 * @property list<string> $serverCertificateArns
 * @property string $validationCertificateArn
 * @property Shapes\AuthorizerConfig $authorizerConfig
 * @property 'DATA'|'CREDENTIAL_PROVIDER'|'JOBS' $serviceType
 * @property list<Shapes\Tag> $tags
 * @property Shapes\TlsConfig $tlsConfig
 * @property Shapes\ServerCertificateConfig $serverCertificateConfig
 * @property 'CUSTOM_AUTH_X509'|'CUSTOM_AUTH'|'AWS_X509'|'AWS_SIGV4'|'DEFAULT' $authenticationType
 * @property 'SECURE_MQTT'|'MQTT_WSS'|'HTTPS'|'DEFAULT' $applicationProtocol
 * @property Shapes\ClientCertificateConfig $clientCertificateConfig
 */
class CreateDomainConfigurationRequest extends Request
{
    /**
     * @param array{
     *     domainConfigurationName: string,
     *     domainName?: string,
     *     serverCertificateArns?: list<string>,
     *     validationCertificateArn?: string,
     *     authorizerConfig?: Shapes\AuthorizerConfig,
     *     serviceType?: 'DATA'|'CREDENTIAL_PROVIDER'|'JOBS',
     *     tags?: list<Shapes\Tag>,
     *     tlsConfig?: Shapes\TlsConfig,
     *     serverCertificateConfig?: Shapes\ServerCertificateConfig,
     *     authenticationType?: 'CUSTOM_AUTH_X509'|'CUSTOM_AUTH'|'AWS_X509'|'AWS_SIGV4'|'DEFAULT',
     *     applicationProtocol?: 'SECURE_MQTT'|'MQTT_WSS'|'HTTPS'|'DEFAULT',
     *     clientCertificateConfig?: Shapes\ClientCertificateConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
