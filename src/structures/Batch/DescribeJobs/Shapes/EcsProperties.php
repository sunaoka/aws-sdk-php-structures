<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EcsTaskProperties> $taskProperties
 */
class EcsProperties extends Shape
{
    /**
     * @param array{taskProperties: list<EcsTaskProperties>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
