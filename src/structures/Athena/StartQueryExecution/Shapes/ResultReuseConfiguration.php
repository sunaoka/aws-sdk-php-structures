<?php

namespace Sunaoka\Aws\Structures\Athena\StartQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResultReuseByAgeConfiguration $ResultReuseByAgeConfiguration
 */
class ResultReuseConfiguration extends Shape
{
    /**
     * @param array{ResultReuseByAgeConfiguration?: ResultReuseByAgeConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
