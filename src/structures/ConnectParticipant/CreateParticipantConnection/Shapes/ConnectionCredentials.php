<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\CreateParticipantConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectionToken
 * @property string $Expiry
 */
class ConnectionCredentials extends Shape
{
    /**
     * @param array{
     *     ConnectionToken?: string,
     *     Expiry?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
