<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\GetTranscript\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MessageId
 * @property list<Receipt>|null $Receipts
 */
class MessageMetadata extends Shape
{
    /**
     * @param array{
     *     MessageId?: string|null,
     *     Receipts?: list<Receipt>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
