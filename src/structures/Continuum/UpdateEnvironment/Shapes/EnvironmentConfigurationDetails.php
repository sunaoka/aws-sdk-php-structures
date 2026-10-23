<?php

namespace Sunaoka\Aws\Structures\Continuum\UpdateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodeConfigurationDetails|null $codeConfiguration
 */
class EnvironmentConfigurationDetails extends Shape
{
    /**
     * @param array{codeConfiguration?: CodeConfigurationDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
