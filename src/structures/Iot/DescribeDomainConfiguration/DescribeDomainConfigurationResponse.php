<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDomainConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainConfigurationName
 * @property string $domainConfigurationArn
 * @property string $domainName
 * @property list<Shapes\ServerCertificateSummary> $serverCertificates
 * @property Shapes\AuthorizerConfig $authorizerConfig
 * @property 'ENABLED'|'DISABLED' $domainConfigurationStatus
 * @property 'DATA'|'CREDENTIAL_PROVIDER'|'JOBS' $serviceType
 * @property 'ENDPOINT'|'AWS_MANAGED'|'CUSTOMER_MANAGED' $domainType
 * @property \Aws\Api\DateTimeResult $lastStatusChangeDate
 * @property Shapes\TlsConfig $tlsConfig
 * @property Shapes\ServerCertificateConfig $serverCertificateConfig
 * @property 'CUSTOM_AUTH_X509'|'CUSTOM_AUTH'|'AWS_X509'|'AWS_SIGV4'|'DEFAULT' $authenticationType
 * @property 'SECURE_MQTT'|'MQTT_WSS'|'HTTPS'|'DEFAULT' $applicationProtocol
 * @property Shapes\ClientCertificateConfig $clientCertificateConfig
 */
class DescribeDomainConfigurationResponse extends Response
{
}
