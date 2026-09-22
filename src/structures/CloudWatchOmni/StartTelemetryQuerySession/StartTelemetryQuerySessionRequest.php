<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\StartTelemetryQuerySession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $sessionName
 */
class StartTelemetryQuerySessionRequest extends Request
{
    /**
     * @param array{sessionName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
