<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListProblems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Title
 * @property string|null $ShortName
 * @property string|null $Insights
 * @property 'IGNORE'|'RESOLVED'|'PENDING'|'RECURRING'|'RECOVERING'|null $Status
 * @property string|null $AffectedResource
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'Informative'|'Low'|'Medium'|'High'|null $SeverityLevel
 * @property string|null $AccountId
 * @property string|null $ResourceGroupName
 * @property array<'INSIGHTS_FEEDBACK', 'NOT_SPECIFIED'|'USEFUL'|'NOT_USEFUL'>|null $Feedback
 * @property int|null $RecurringCount
 * @property \Aws\Api\DateTimeResult|null $LastRecurrenceTime
 * @property 'IGNORED'|'VISIBLE'|null $Visibility
 * @property 'MANUAL'|'AUTOMATIC'|'UNRESOLVED'|null $ResolutionMethod
 */
class Problem extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Title?: string|null,
     *     ShortName?: string|null,
     *     Insights?: string|null,
     *     Status?: 'IGNORE'|'RESOLVED'|'PENDING'|'RECURRING'|'RECOVERING'|null,
     *     AffectedResource?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     SeverityLevel?: 'Informative'|'Low'|'Medium'|'High'|null,
     *     AccountId?: string|null,
     *     ResourceGroupName?: string|null,
     *     Feedback?: array<'INSIGHTS_FEEDBACK', 'NOT_SPECIFIED'|'USEFUL'|'NOT_USEFUL'>|null,
     *     RecurringCount?: int|null,
     *     LastRecurrenceTime?: \Aws\Api\DateTimeResult|null,
     *     Visibility?: 'IGNORED'|'VISIBLE'|null,
     *     ResolutionMethod?: 'MANUAL'|'AUTOMATIC'|'UNRESOLVED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
