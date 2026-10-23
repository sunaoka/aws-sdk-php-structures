<?php

namespace Sunaoka\Aws\Structures\Continuum\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $collectorDataAccessRoleArn
 */
class CollectorDetails extends Shape
{
    /**
     * @param array{collectorDataAccessRoleArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
