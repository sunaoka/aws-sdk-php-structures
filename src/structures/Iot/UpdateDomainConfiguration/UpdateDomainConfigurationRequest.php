<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateDomainConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainConfigurationName
 * @property Shapes\AuthorizerConfig|null $authorizerConfig
 * @property 'ENABLED'|'DISABLED'|null $domainConfigurationStatus
 * @property bool|null $removeAuthorizerConfig
 * @property Shapes\TlsConfig|null $tlsConfig
 */
class UpdateDomainConfigurationRequest extends Request
{
    /**
     * @param array{
     *     domainConfigurationName: string,
     *     authorizerConfig?: Shapes\AuthorizerConfig|null,
     *     domainConfigurationStatus?: 'ENABLED'|'DISABLED'|null,
     *     removeAuthorizerConfig?: bool|null,
     *     tlsConfig?: Shapes\TlsConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
