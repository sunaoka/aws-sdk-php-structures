<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\GetTranscript\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MessageId
 * @property list<Receipt> $Receipts
 */
class MessageMetadata extends Shape
{
    /**
     * @param array{
     *     MessageId?: string,
     *     Receipts?: list<Receipt>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
