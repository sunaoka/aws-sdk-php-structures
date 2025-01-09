<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\GetTranscript\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeliveredTimestamp
 * @property string $ReadTimestamp
 * @property string $RecipientParticipantId
 */
class Receipt extends Shape
{
    /**
     * @param array{
     *     DeliveredTimestamp?: string,
     *     ReadTimestamp?: string,
     *     RecipientParticipantId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
