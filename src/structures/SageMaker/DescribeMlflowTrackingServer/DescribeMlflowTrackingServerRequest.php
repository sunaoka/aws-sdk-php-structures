<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeMlflowTrackingServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackingServerName
 */
class DescribeMlflowTrackingServerRequest extends Request
{
    /**
     * @param array{TrackingServerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
