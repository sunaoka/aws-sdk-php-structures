<?php

namespace Sunaoka\Aws\Structures\Connect\CreateParticipant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParticipantToken
 * @property string|null $Expiry
 */
class ParticipantTokenCredentials extends Shape
{
    /**
     * @param array{
     *     ParticipantToken?: string|null,
     *     Expiry?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
