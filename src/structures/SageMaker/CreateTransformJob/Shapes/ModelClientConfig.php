<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTransformJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 3600> $InvocationsTimeoutInSeconds
 * @property int<0, 3> $InvocationsMaxRetries
 */
class ModelClientConfig extends Shape
{
    /**
     * @param array{
     *     InvocationsTimeoutInSeconds?: int<1, 3600>,
     *     InvocationsMaxRetries?: int<0, 3>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
