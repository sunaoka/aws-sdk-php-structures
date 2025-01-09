<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReportDestinationS3 $S3
 */
class ReportDestination extends Shape
{
    /**
     * @param array{S3?: ReportDestinationS3} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
