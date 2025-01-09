<?php

namespace Sunaoka\Aws\Structures\Connect\CreateParticipant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParticipantToken
 * @property string $Expiry
 */
class ParticipantTokenCredentials extends Shape
{
    /**
     * @param array{
     *     ParticipantToken?: string,
     *     Expiry?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
