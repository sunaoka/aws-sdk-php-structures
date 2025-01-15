<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\DeleteRumMetricsDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppMonitorName
 * @property 'CloudWatch'|'Evidently' $Destination
 * @property string|null $DestinationArn
 */
class DeleteRumMetricsDestinationRequest extends Request
{
    /**
     * @param array{
     *     AppMonitorName: string,
     *     Destination: 'CloudWatch'|'Evidently',
     *     DestinationArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
