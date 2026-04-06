<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopMlflowTrackingServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackingServerName
 */
class StopMlflowTrackingServerRequest extends Request
{
    /**
     * @param array{TrackingServerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
