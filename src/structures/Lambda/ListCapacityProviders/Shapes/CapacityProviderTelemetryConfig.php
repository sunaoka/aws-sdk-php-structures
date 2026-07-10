<?php

namespace Sunaoka\Aws\Structures\Lambda\ListCapacityProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CapacityProviderLoggingConfig|null $LoggingConfig
 */
class CapacityProviderTelemetryConfig extends Shape
{
    /**
     * @param array{LoggingConfig?: CapacityProviderLoggingConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
