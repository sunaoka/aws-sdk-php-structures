<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $index
 * @property SendMessageContentBlockDelta|null $delta
 * @property int|null $sequenceNumber
 */
class SendMessageContentBlockDeltaEvent extends Shape
{
    /**
     * @param array{
     *     index?: int|null,
     *     delta?: SendMessageContentBlockDelta|null,
     *     sequenceNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
