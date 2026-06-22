<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InvestigationId
 * @property 'RUNNING'|'COMPLETED'|'FAILED'|null $Status
 * @property string|null $TriggerPrompt
 * @property 'Info'|'Low'|'Medium'|'High'|'Critical'|null $RiskLevel
 * @property 'Unknown'|'Low'|'Medium'|'High'|null $Confidence
 * @property string|null $Title
 * @property string|null $AccountId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class InvestigationSummary extends Shape
{
    /**
     * @param array{
     *     InvestigationId?: string|null,
     *     Status?: 'RUNNING'|'COMPLETED'|'FAILED'|null,
     *     TriggerPrompt?: string|null,
     *     RiskLevel?: 'Info'|'Low'|'Medium'|'High'|'Critical'|null,
     *     Confidence?: 'Unknown'|'Low'|'Medium'|'High'|null,
     *     Title?: string|null,
     *     AccountId?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
