<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EVENT'|'REQUEST_RESPONSE'|null $InvocationType
 * @property string|null $Name
 * @property string|null $TraceHeader
 * @property string|null $InvocationTimeoutSeconds
 */
class StepFunctionsParameters extends Shape
{
    /**
     * @param array{
     *     InvocationType?: 'EVENT'|'REQUEST_RESPONSE'|null,
     *     Name?: string|null,
     *     TraceHeader?: string|null,
     *     InvocationTimeoutSeconds?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
