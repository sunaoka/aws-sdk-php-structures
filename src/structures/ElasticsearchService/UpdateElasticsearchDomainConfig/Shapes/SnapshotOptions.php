<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AutomatedSnapshotStartHour
 */
class SnapshotOptions extends Shape
{
    /**
     * @param array{AutomatedSnapshotStartHour?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
