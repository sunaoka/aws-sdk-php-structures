<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIWorkloadConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AIWorkloadS3DataSource|null $S3DataSource
 */
class AIWorkloadDataSource extends Shape
{
    /**
     * @param array{S3DataSource?: AIWorkloadS3DataSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
