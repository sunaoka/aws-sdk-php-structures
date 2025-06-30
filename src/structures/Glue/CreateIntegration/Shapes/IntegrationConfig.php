<?php

namespace Sunaoka\Aws\Structures\Glue\CreateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RefreshInterval
 * @property array<string, string>|null $SourceProperties
 */
class IntegrationConfig extends Shape
{
    /**
     * @param array{
     *     RefreshInterval?: string|null,
     *     SourceProperties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
