<?php

namespace Sunaoka\Aws\Structures\Continuum\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EnvironmentSourceConfiguration|null $sourceConfiguration
 * @property EnvironmentConfiguration|null $environmentConfiguration
 */
class CreateCodeConfiguration extends Shape
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
