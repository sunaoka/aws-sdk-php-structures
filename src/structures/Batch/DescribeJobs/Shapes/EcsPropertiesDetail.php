<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EcsTaskDetails> $taskProperties
 */
class EcsPropertiesDetail extends Shape
{
    /**
     * @param array{taskProperties?: list<EcsTaskDetails>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
