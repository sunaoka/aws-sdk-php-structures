<?php

namespace Sunaoka\Aws\Structures\drs\DeleteRecoveryInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryInstanceID
 */
class DeleteRecoveryInstanceRequest extends Request
{
    /**
     * @param array{recoveryInstanceID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
