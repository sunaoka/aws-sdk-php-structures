<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctionEventInvokeConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string $FunctionArn
 * @property int<0, 2> $MaximumRetryAttempts
 * @property int<60, 21600> $MaximumEventAgeInSeconds
 * @property DestinationConfig $DestinationConfig
 */
class FunctionEventInvokeConfig extends Shape
{
    /**
     * @param array{
     *     LastModified?: \Aws\Api\DateTimeResult,
     *     FunctionArn?: string,
     *     MaximumRetryAttempts?: int<0, 2>,
     *     MaximumEventAgeInSeconds?: int<60, 21600>,
     *     DestinationConfig?: DestinationConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
