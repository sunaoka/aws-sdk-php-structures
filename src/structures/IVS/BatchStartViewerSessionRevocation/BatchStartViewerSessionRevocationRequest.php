<?php

namespace Sunaoka\Aws\Structures\IVS\BatchStartViewerSessionRevocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchStartViewerSessionRevocationViewerSession> $viewerSessions
 */
class BatchStartViewerSessionRevocationRequest extends Request
{
    /**
     * @param array{viewerSessions: list<Shapes\BatchStartViewerSessionRevocationViewerSession>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
