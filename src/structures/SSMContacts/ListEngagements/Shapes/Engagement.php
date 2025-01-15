<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListEngagements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EngagementArn
 * @property string $ContactArn
 * @property string $Sender
 * @property string|null $IncidentId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $StopTime
 */
class Engagement extends Shape
{
    /**
     * @param array{
     *     EngagementArn: string,
     *     ContactArn: string,
     *     Sender: string,
     *     IncidentId?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     StopTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
