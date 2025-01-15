<?php

namespace Sunaoka\Aws\Structures\Iot\ReplaceTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $streamName
 * @property string|null $partitionKey
 */
class KinesisAction extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     streamName: string,
     *     partitionKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
