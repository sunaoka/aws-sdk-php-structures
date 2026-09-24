<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $PathParameterValues
 * @property array<string, string>|null $HeaderParameters
 * @property array<string, string>|null $QueryStringParameters
 * @property string|null $InvocationTimeoutSeconds
 */
class HttpParameters extends Shape
{
    /**
     * @param array{
     *     PathParameterValues?: list<string>|null,
     *     HeaderParameters?: array<string, string>|null,
     *     QueryStringParameters?: array<string, string>|null,
     *     InvocationTimeoutSeconds?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
