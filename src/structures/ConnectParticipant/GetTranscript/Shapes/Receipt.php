<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\GetTranscript\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeliveredTimestamp
 * @property string|null $ReadTimestamp
 * @property string|null $RecipientParticipantId
 */
class Receipt extends Shape
{
    /**
     * @param array{
     *     DeliveredTimestamp?: string|null,
     *     ReadTimestamp?: string|null,
     *     RecipientParticipantId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
