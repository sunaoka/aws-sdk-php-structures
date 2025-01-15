<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeProcessingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ProcessingOutput> $Outputs
 * @property string|null $KmsKeyId
 */
class ProcessingOutputConfig extends Shape
{
    /**
     * @param array{
     *     Outputs: list<ProcessingOutput>,
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
