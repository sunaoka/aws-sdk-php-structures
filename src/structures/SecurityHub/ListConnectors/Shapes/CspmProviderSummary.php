<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AZURE'|null $ProviderName
 * @property 'CONNECTED'|'DEGRADED'|'FAILED_TO_CONNECT'|'UNKNOWN'|null $ConnectorStatus
 * @property CspmProviderDetail|null $ProviderConfiguration
 */
class CspmProviderSummary extends Shape
{
    /**
     * @param array{
     *     ProviderName?: 'AZURE'|null,
     *     ConnectorStatus?: 'CONNECTED'|'DEGRADED'|'FAILED_TO_CONNECT'|'UNKNOWN'|null,
     *     ProviderConfiguration?: CspmProviderDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
