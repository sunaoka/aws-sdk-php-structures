<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProspectingResultCustomer|null $Customer
 * @property ProspectingInsights|null $Insights
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $TaskId
 * @property string|null $TaskArn
 * @property string|null $TaskName
 */
class ProspectingResultAws extends Shape
{
    /**
     * @param array{
     *     Customer?: ProspectingResultCustomer|null,
     *     Insights?: ProspectingInsights|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     TaskId?: string|null,
     *     TaskArn?: string|null,
     *     TaskName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
