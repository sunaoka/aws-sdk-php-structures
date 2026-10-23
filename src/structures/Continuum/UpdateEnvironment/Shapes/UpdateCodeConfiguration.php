<?php

namespace Sunaoka\Aws\Structures\Continuum\UpdateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EnvironmentSourceConfiguration|null $sourceConfiguration
 * @property EnvironmentConfiguration|null $environmentConfiguration
 */
class UpdateCodeConfiguration extends Shape
{
    /**
     * @param array{
     *     sourceConfiguration?: EnvironmentSourceConfiguration|null,
     *     environmentConfiguration?: EnvironmentConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
