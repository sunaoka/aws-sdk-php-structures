<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDataQualityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MonitoringS3Output $S3Output
 */
class MonitoringOutput extends Shape
{
    /**
     * @param array{S3Output: MonitoringS3Output} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
