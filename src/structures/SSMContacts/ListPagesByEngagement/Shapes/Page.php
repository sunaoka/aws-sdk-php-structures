<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPagesByEngagement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PageArn
 * @property string $EngagementArn
 * @property string $ContactArn
 * @property string $Sender
 * @property string $IncidentId
 * @property \Aws\Api\DateTimeResult $SentTime
 * @property \Aws\Api\DateTimeResult $DeliveryTime
 * @property \Aws\Api\DateTimeResult $ReadTime
 */
class Page extends Shape
{
    /**
     * @param array{
     *     PageArn: string,
     *     EngagementArn: string,
     *     ContactArn: string,
     *     Sender: string,
     *     IncidentId?: string,
     *     SentTime?: \Aws\Api\DateTimeResult,
     *     DeliveryTime?: \Aws\Api\DateTimeResult,
     *     ReadTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
