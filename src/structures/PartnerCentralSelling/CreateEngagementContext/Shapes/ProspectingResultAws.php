<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementContext\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $TaskId
 * @property string|null $TaskArn
 * @property string|null $TaskName
 * @property ProspectingResultCustomer|null $Customer
 * @property ProspectingInsights|null $Insights
 */
class ProspectingResultAws extends Shape
{
    /**
     * @param array{
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     TaskId?: string|null,
     *     TaskArn?: string|null,
     *     TaskName?: string|null,
     *     Customer?: ProspectingResultCustomer|null,
     *     Insights?: ProspectingInsights|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
