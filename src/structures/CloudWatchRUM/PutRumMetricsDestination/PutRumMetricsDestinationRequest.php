<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\PutRumMetricsDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppMonitorName
 * @property 'CloudWatch'|'Evidently' $Destination
 * @property string|null $DestinationArn
 * @property string|null $IamRoleArn
 */
class PutRumMetricsDestinationRequest extends Request
{
    /**
     * @param array{
     *     AppMonitorName: string,
     *     Destination: 'CloudWatch'|'Evidently',
     *     DestinationArn?: string|null,
     *     IamRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
