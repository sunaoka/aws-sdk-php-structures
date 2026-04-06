<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventMetadata|null $EventMetadata
 */
class EventDetails extends Shape
{
    /**
     * @param array{EventMetadata?: EventMetadata|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
