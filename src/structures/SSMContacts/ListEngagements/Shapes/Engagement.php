<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListEngagements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EngagementArn
 * @property string $ContactArn
 * @property string $Sender
 * @property string $IncidentId
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $StopTime
 */
class Engagement extends Shape
{
    /**
     * @param array{
     *     EngagementArn: string,
     *     ContactArn: string,
     *     Sender: string,
     *     IncidentId?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     StopTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
