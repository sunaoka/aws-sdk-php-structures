<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logGroup
 */
class CloudWatchLogsDestinationConfig extends Shape
{
    /**
     * @param array{logGroup?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
