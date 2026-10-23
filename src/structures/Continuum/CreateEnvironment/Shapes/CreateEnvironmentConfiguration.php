<?php

namespace Sunaoka\Aws\Structures\Continuum\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateCodeConfiguration|null $codeConfiguration
 */
class CreateEnvironmentConfiguration extends Shape
{
    /**
     * @param array{codeConfiguration?: CreateCodeConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
