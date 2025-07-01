<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SessionId
 * @property string|null $Target
 * @property 'Connected'|'Connecting'|'Disconnected'|'Terminated'|'Terminating'|'Failed'|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property string|null $DocumentName
 * @property string|null $Owner
 * @property string|null $Reason
 * @property string|null $Details
 * @property SessionManagerOutputUrl|null $OutputUrl
 * @property string|null $MaxSessionDuration
 * @property 'Standard'|'JustInTime'|null $AccessType
 */
class Session extends Shape
{
    /**
     * @param array{
     *     SessionId?: string|null,
     *     Target?: string|null,
     *     Status?: 'Connected'|'Connecting'|'Disconnected'|'Terminated'|'Terminating'|'Failed'|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     DocumentName?: string|null,
     *     Owner?: string|null,
     *     Reason?: string|null,
     *     Details?: string|null,
     *     OutputUrl?: SessionManagerOutputUrl|null,
     *     MaxSessionDuration?: string|null,
     *     AccessType?: 'Standard'|'JustInTime'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
