<?php

namespace Sunaoka\Aws\Structures\Iot\ListDomainConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainConfigurationName
 * @property string|null $domainConfigurationArn
 * @property 'DATA'|'CREDENTIAL_PROVIDER'|'JOBS'|null $serviceType
 */
class DomainConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     domainConfigurationName?: string|null,
     *     domainConfigurationArn?: string|null,
     *     serviceType?: 'DATA'|'CREDENTIAL_PROVIDER'|'JOBS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
