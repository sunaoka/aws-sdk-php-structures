<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateScraperLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $options
 */
class ComponentConfig extends Shape
{
    /**
     * @param array{options?: array<string, string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
