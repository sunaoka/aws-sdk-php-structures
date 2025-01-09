<?php

namespace Sunaoka\Aws\Structures\SageMaker\StartMlflowTrackingServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackingServerName
 */
class StartMlflowTrackingServerRequest extends Request
{
    /**
     * @param array{TrackingServerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
