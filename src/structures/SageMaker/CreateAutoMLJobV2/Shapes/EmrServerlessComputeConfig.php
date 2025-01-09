<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExecutionRoleARN
 */
class EmrServerlessComputeConfig extends Shape
{
    /**
     * @param array{ExecutionRoleARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
