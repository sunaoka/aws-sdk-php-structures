<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTransformJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 3600>|null $InvocationsTimeoutInSeconds
 * @property int<0, 3>|null $InvocationsMaxRetries
 */
class ModelClientConfig extends Shape
{
    /**
     * @param array{
     *     InvocationsTimeoutInSeconds?: int<1, 3600>|null,
     *     InvocationsMaxRetries?: int<0, 3>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
