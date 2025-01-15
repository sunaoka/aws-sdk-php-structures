<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EcsTaskDetails>|null $taskProperties
 */
class EcsPropertiesDetail extends Shape
{
    /**
     * @param array{taskProperties?: list<EcsTaskDetails>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
