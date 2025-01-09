<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ProcessingOutput> $Outputs
 * @property string $KmsKeyId
 */
class ProcessingOutputConfig extends Shape
{
    /**
     * @param array{
     *     Outputs: list<ProcessingOutput>,
     *     KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
