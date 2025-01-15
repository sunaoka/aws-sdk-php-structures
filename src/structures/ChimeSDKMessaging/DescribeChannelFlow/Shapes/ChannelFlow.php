<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DescribeChannelFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChannelFlowArn
 * @property list<Processor>|null $Processors
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 */
class ChannelFlow extends Shape
{
    /**
     * @param array{
     *     ChannelFlowArn?: string|null,
     *     Processors?: list<Processor>|null,
     *     Name?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
