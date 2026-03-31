<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $responseId
 * @property int|null $sequenceNumber
 */
class SendMessageResponseInProgressEvent extends Shape
{
    /**
     * @param array{
     *     responseId?: string|null,
     *     sequenceNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
