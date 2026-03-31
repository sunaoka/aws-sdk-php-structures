<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $content
 * @property int|null $sequenceNumber
 */
class SendMessageSummaryEvent extends Shape
{
    /**
     * @param array{
     *     content?: string|null,
     *     sequenceNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
