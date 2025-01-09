<?php

namespace Sunaoka\Aws\Structures\Iot\ListDomainConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainConfigurationName
 * @property string $domainConfigurationArn
 * @property 'DATA'|'CREDENTIAL_PROVIDER'|'JOBS' $serviceType
 */
class DomainConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     domainConfigurationName?: string,
     *     domainConfigurationArn?: string,
     *     serviceType?: 'DATA'|'CREDENTIAL_PROVIDER'|'JOBS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
