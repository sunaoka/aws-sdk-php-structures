<?php

namespace Sunaoka\Aws\Structures\drs\DisconnectRecoveryInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryInstanceID
 */
class DisconnectRecoveryInstanceRequest extends Request
{
    /**
     * @param array{recoveryInstanceID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
