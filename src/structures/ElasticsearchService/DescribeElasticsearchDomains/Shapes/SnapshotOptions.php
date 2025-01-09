<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AutomatedSnapshotStartHour
 */
class SnapshotOptions extends Shape
{
    /**
     * @param array{AutomatedSnapshotStartHour?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
