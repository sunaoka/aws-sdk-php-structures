<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateDomainConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainConfigurationName
 * @property Shapes\AuthorizerConfig $authorizerConfig
 * @property 'ENABLED'|'DISABLED' $domainConfigurationStatus
 * @property bool $removeAuthorizerConfig
 * @property Shapes\TlsConfig $tlsConfig
 * @property Shapes\ServerCertificateConfig $serverCertificateConfig
 * @property 'CUSTOM_AUTH_X509'|'CUSTOM_AUTH'|'AWS_X509'|'AWS_SIGV4'|'DEFAULT' $authenticationType
 * @property 'SECURE_MQTT'|'MQTT_WSS'|'HTTPS'|'DEFAULT' $applicationProtocol
 * @property Shapes\ClientCertificateConfig $clientCertificateConfig
 */
class UpdateDomainConfigurationRequest extends Request
{
    /**
     * @param array{
     *     domainConfigurationName: string,
     *     authorizerConfig?: Shapes\AuthorizerConfig,
     *     domainConfigurationStatus?: 'ENABLED'|'DISABLED',
     *     removeAuthorizerConfig?: bool,
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
