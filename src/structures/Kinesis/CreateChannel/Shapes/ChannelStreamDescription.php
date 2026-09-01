<?php

namespace Sunaoka\Aws\Structures\Kinesis\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamARN
 * @property \Aws\Api\DateTimeResult $StreamCreationTimestamp
 * @property RecordConfiguration $RecordConfiguration
 */
class ChannelStreamDescription extends Shape
{
    /**
     * @param array{
     *     StreamARN: string,
     *     StreamCreationTimestamp: \Aws\Api\DateTimeResult,
     *     RecordConfiguration: RecordConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
