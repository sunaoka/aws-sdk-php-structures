<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DescribeChannelFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelFlowArn
 * @property list<Processor> $Processors
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 */
class ChannelFlow extends Shape
{
    /**
     * @param array{
     *     ChannelFlowArn?: string,
     *     Processors?: list<Processor>,
     *     Name?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
