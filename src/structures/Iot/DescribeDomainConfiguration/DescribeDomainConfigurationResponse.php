<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDomainConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $domainConfigurationName
 * @property string|null $domainConfigurationArn
 * @property string|null $domainName
 * @property list<Shapes\ServerCertificateSummary>|null $serverCertificates
 * @property Shapes\AuthorizerConfig|null $authorizerConfig
 * @property 'ENABLED'|'DISABLED'|null $domainConfigurationStatus
 * @property 'DATA'|'CREDENTIAL_PROVIDER'|'JOBS'|null $serviceType
 * @property 'ENDPOINT'|'AWS_MANAGED'|'CUSTOMER_MANAGED'|null $domainType
 * @property \Aws\Api\DateTimeResult|null $lastStatusChangeDate
 * @property Shapes\TlsConfig|null $tlsConfig
 * @property Shapes\ServerCertificateConfig|null $serverCertificateConfig
 */
class DescribeDomainConfigurationResponse extends Response
{
}
