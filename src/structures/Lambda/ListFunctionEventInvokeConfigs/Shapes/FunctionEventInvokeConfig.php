<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctionEventInvokeConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property string|null $FunctionArn
 * @property int<0, 2>|null $MaximumRetryAttempts
 * @property int<60, 21600>|null $MaximumEventAgeInSeconds
 * @property DestinationConfig|null $DestinationConfig
 */
class FunctionEventInvokeConfig extends Shape
{
    /**
     * @param array{
     *     LastModified?: \Aws\Api\DateTimeResult|null,
     *     FunctionArn?: string|null,
     *     MaximumRetryAttempts?: int<0, 2>|null,
     *     MaximumEventAgeInSeconds?: int<60, 21600>|null,
     *     DestinationConfig?: DestinationConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
