<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetCodeReviews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logGroup
 * @property string|null $logStream
 */
class CloudWatchLog extends Shape
{
    /**
     * @param array{
     *     logGroup?: string|null,
     *     logStream?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
