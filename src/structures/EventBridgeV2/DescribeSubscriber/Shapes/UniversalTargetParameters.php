<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Input
 * @property string|null $InvocationTimeoutSeconds
 */
class UniversalTargetParameters extends Shape
{
    /**
     * @param array{
     *     Input: string,
     *     InvocationTimeoutSeconds?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
