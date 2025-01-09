<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $streamName
 * @property string $partitionKey
 */
class KinesisAction extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     streamName: string,
     *     partitionKey?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
