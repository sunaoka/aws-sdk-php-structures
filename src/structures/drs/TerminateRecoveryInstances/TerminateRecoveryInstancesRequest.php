<?php

namespace Sunaoka\Aws\Structures\drs\TerminateRecoveryInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $recoveryInstanceIDs
 */
class TerminateRecoveryInstancesRequest extends Request
{
    /**
     * @param array{recoveryInstanceIDs: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
