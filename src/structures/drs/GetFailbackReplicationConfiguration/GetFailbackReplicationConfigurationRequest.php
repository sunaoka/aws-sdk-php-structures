<?php

namespace Sunaoka\Aws\Structures\drs\GetFailbackReplicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryInstanceID
 */
class GetFailbackReplicationConfigurationRequest extends Request
{
    /**
     * @param array{recoveryInstanceID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
