<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SourceConfiguration|null $GlobalSourceConfiguration
 * @property SourceConfiguration|null $ValidationEndpointConfiguration
 * @property array<string, EntityConfiguration>|null $EntityConfigurations
 */
class RestConfiguration extends Shape
{
    /**
     * @param array{
     *     GlobalSourceConfiguration?: SourceConfiguration|null,
     *     ValidationEndpointConfiguration?: SourceConfiguration|null,
     *     EntityConfigurations?: array<string, EntityConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
