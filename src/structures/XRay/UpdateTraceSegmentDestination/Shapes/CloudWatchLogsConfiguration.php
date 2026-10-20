<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateTraceSegmentDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SpansLogGroupKmsKeyId
 */
class CloudWatchLogsConfiguration extends Shape
{
    /**
     * @param array{SpansLogGroupKmsKeyId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
