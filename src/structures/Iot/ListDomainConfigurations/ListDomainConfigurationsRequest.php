<?php

namespace Sunaoka\Aws\Structures\Iot\ListDomainConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $marker
 * @property int $pageSize
 * @property 'DATA'|'CREDENTIAL_PROVIDER'|'JOBS' $serviceType
 */
class ListDomainConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     marker?: string,
     *     pageSize?: int,
     *     serviceType?: 'DATA'|'CREDENTIAL_PROVIDER'|'JOBS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
