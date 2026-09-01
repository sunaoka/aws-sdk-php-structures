<?php

namespace Sunaoka\Aws\Structures\Kinesis\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamARN
 * @property RecordConfiguration $RecordConfiguration
 */
class ChannelStreamConfiguration extends Shape
{
    /**
     * @param array{
     *     StreamARN: string,
     *     RecordConfiguration: RecordConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
