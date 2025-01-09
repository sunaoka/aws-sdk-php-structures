<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SessionId
 * @property string $Target
 * @property 'Connected'|'Connecting'|'Disconnected'|'Terminated'|'Terminating'|'Failed' $Status
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property string $DocumentName
 * @property string $Owner
 * @property string $Reason
 * @property string $Details
 * @property SessionManagerOutputUrl $OutputUrl
 * @property string $MaxSessionDuration
 */
class Session extends Shape
{
    /**
     * @param array{
     *     SessionId?: string,
     *     Target?: string,
     *     Status?: 'Connected'|'Connecting'|'Disconnected'|'Terminated'|'Terminating'|'Failed',
     *     StartDate?: \Aws\Api\DateTimeResult,
     *     EndDate?: \Aws\Api\DateTimeResult,
     *     DocumentName?: string,
     *     Owner?: string,
     *     Reason?: string,
     *     Details?: string,
     *     OutputUrl?: SessionManagerOutputUrl,
     *     MaxSessionDuration?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
