<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\StopTelemetryQuerySession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sessionId
 */
class StopTelemetryQuerySessionRequest extends Request
{
    /**
     * @param array{sessionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
