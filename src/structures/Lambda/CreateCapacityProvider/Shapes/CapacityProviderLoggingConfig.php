<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEBUG'|'INFO'|'WARN'|null $SystemLogLevel
 * @property string|null $LogGroup
 */
class CapacityProviderLoggingConfig extends Shape
{
    /**
     * @param array{
     *     SystemLogLevel?: 'DEBUG'|'INFO'|'WARN'|null,
     *     LogGroup?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
