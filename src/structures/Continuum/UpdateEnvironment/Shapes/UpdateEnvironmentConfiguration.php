<?php

namespace Sunaoka\Aws\Structures\Continuum\UpdateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateCodeConfiguration|null $codeConfiguration
 */
class UpdateEnvironmentConfiguration extends Shape
{
    /**
     * @param array{codeConfiguration?: UpdateCodeConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
