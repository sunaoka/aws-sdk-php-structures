<?php

namespace Sunaoka\Aws\Structures\Kinesis\CreateQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 43200>|null $VisibilityTimeoutSeconds
 * @property DeadLetterConfiguration|null $DeadLetterConfiguration
 */
class QueueAttributes extends Shape
{
    /**
     * @param array{
     *     VisibilityTimeoutSeconds?: int<0, 43200>|null,
     *     DeadLetterConfiguration?: DeadLetterConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
