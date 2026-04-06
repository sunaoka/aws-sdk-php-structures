<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateDomainConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainConfigurationName
 * @property Shapes\AuthorizerConfig|null $authorizerConfig
 * @property 'ENABLED'|'DISABLED'|null $domainConfigurationStatus
 * @property bool|null $removeAuthorizerConfig
 * @property Shapes\TlsConfig|null $tlsConfig
 * @property Shapes\ServerCertificateConfig|null $serverCertificateConfig
 * @property 'CUSTOM_AUTH_X509'|'CUSTOM_AUTH'|'AWS_X509'|'AWS_SIGV4'|'DEFAULT'|null $authenticationType
 * @property 'SECURE_MQTT'|'MQTT_WSS'|'HTTPS'|'DEFAULT'|null $applicationProtocol
 * @property Shapes\ClientCertificateConfig|null $clientCertificateConfig
 */
class UpdateDomainConfigurationRequest extends Request
{
    /**
     * @param array{
     *     domainConfigurationName: string,
     *     authorizerConfig?: Shapes\AuthorizerConfig|null,
     *     domainConfigurationStatus?: 'ENABLED'|'DISABLED'|null,
     *     removeAuthorizerConfig?: bool|null,
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
