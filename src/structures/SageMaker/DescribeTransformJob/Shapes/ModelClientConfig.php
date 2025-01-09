<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTransformJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $InvocationsTimeoutInSeconds
 * @property int $InvocationsMaxRetries
 */
class ModelClientConfig extends Shape
{
    /**
     * @param array{
     *     InvocationsTimeoutInSeconds?: int,
     *     InvocationsMaxRetries?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
