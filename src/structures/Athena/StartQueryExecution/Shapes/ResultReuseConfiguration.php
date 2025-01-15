<?php

namespace Sunaoka\Aws\Structures\Athena\StartQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResultReuseByAgeConfiguration|null $ResultReuseByAgeConfiguration
 */
class ResultReuseConfiguration extends Shape
{
    /**
     * @param array{ResultReuseByAgeConfiguration?: ResultReuseByAgeConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
