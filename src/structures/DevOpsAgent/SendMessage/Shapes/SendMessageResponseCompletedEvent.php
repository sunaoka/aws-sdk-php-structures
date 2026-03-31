<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $responseId
 * @property SendMessageUsageInfo|null $usage
 * @property int|null $sequenceNumber
 */
class SendMessageResponseCompletedEvent extends Shape
{
    /**
     * @param array{
     *     responseId?: string|null,
     *     usage?: SendMessageUsageInfo|null,
     *     sequenceNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
