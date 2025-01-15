<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logGroup
 */
class CloudWatchLogsDestination extends Shape
{
    /**
     * @param array{logGroup?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
