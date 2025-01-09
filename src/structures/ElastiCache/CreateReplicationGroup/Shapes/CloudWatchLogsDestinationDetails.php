<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateReplicationGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogGroup
 */
class CloudWatchLogsDestinationDetails extends Shape
{
    /**
     * @param array{LogGroup?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
