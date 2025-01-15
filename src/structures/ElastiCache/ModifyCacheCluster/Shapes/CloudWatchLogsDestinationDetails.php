<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyCacheCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LogGroup
 */
class CloudWatchLogsDestinationDetails extends Shape
{
    /**
     * @param array{LogGroup?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
