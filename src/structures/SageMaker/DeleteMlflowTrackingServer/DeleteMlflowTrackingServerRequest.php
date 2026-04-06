<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteMlflowTrackingServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackingServerName
 */
class DeleteMlflowTrackingServerRequest extends Request
{
    /**
     * @param array{TrackingServerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
