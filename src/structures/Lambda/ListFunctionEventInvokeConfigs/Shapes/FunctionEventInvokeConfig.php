<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctionEventInvokeConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string $FunctionArn
 * @property int $MaximumRetryAttempts
 * @property int $MaximumEventAgeInSeconds
 * @property DestinationConfig $DestinationConfig
 */
class FunctionEventInvokeConfig extends Shape
{
    /**
     * @param array{
     *     LastModified?: \Aws\Api\DateTimeResult,
     *     FunctionArn?: string,
     *     MaximumRetryAttempts?: int,
     *     MaximumEventAgeInSeconds?: int,
     *     DestinationConfig?: DestinationConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
