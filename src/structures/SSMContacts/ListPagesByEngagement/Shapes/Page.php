<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPagesByEngagement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PageArn
 * @property string $EngagementArn
 * @property string $ContactArn
 * @property string $Sender
 * @property string|null $IncidentId
 * @property \Aws\Api\DateTimeResult|null $SentTime
 * @property \Aws\Api\DateTimeResult|null $DeliveryTime
 * @property \Aws\Api\DateTimeResult|null $ReadTime
 */
class Page extends Shape
{
    /**
     * @param array{
     *     PageArn: string,
     *     EngagementArn: string,
     *     ContactArn: string,
     *     Sender: string,
     *     IncidentId?: string|null,
     *     SentTime?: \Aws\Api\DateTimeResult|null,
     *     DeliveryTime?: \Aws\Api\DateTimeResult|null,
     *     ReadTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
