<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeProblem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Title
 * @property string $ShortName
 * @property string $Insights
 * @property 'IGNORE'|'RESOLVED'|'PENDING'|'RECURRING'|'RECOVERING' $Status
 * @property string $AffectedResource
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'Informative'|'Low'|'Medium'|'High' $SeverityLevel
 * @property string $AccountId
 * @property string $ResourceGroupName
 * @property array<'INSIGHTS_FEEDBACK', 'NOT_SPECIFIED'|'USEFUL'|'NOT_USEFUL'> $Feedback
 * @property int $RecurringCount
 * @property \Aws\Api\DateTimeResult $LastRecurrenceTime
 * @property 'IGNORED'|'VISIBLE' $Visibility
 * @property 'MANUAL'|'AUTOMATIC'|'UNRESOLVED' $ResolutionMethod
 */
class Problem extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Title?: string,
     *     ShortName?: string,
     *     Insights?: string,
     *     Status?: 'IGNORE'|'RESOLVED'|'PENDING'|'RECURRING'|'RECOVERING',
     *     AffectedResource?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     SeverityLevel?: 'Informative'|'Low'|'Medium'|'High',
     *     AccountId?: string,
     *     ResourceGroupName?: string,
     *     Feedback?: array<'INSIGHTS_FEEDBACK', 'NOT_SPECIFIED'|'USEFUL'|'NOT_USEFUL'>,
     *     RecurringCount?: int,
     *     LastRecurrenceTime?: \Aws\Api\DateTimeResult,
     *     Visibility?: 'IGNORED'|'VISIBLE',
     *     ResolutionMethod?: 'MANUAL'|'AUTOMATIC'|'UNRESOLVED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
