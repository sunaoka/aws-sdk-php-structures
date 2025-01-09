<?php

namespace Sunaoka\Aws\Structures\drs\ReverseReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryInstanceID
 */
class ReverseReplicationRequest extends Request
{
    /**
     * @param array{recoveryInstanceID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
