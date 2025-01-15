<?php

namespace Sunaoka\Aws\Structures\Iot\ListDomainConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $marker
 * @property int<1, 250>|null $pageSize
 * @property 'DATA'|'CREDENTIAL_PROVIDER'|'JOBS'|null $serviceType
 */
class ListDomainConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     marker?: string|null,
     *     pageSize?: int<1, 250>|null,
     *     serviceType?: 'DATA'|'CREDENTIAL_PROVIDER'|'JOBS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
