<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $responseId
 * @property string|null $errorCode
 * @property string|null $errorMessage
 * @property int|null $sequenceNumber
 */
class SendMessageResponseFailedEvent extends Shape
{
    /**
     * @param array{
     *     responseId?: string|null,
     *     errorCode?: string|null,
     *     errorMessage?: string|null,
     *     sequenceNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
