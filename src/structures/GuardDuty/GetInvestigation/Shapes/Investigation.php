<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InvestigationId
 * @property 'RUNNING'|'COMPLETED'|'FAILED' $Status
 * @property string $TriggerPrompt
 * @property string $TriggeredBy
 * @property InvestigationMetadata|null $Metadata
 * @property CloudDetails|null $Cloud
 * @property 'Info'|'Low'|'Medium'|'High'|'Critical'|null $RiskLevel
 * @property string|null $Risk
 * @property 'Unknown'|'Low'|'Medium'|'High'|null $Confidence
 * @property string|null $Summary
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $Error
 */
class Investigation extends Shape
{
    /**
     * @param array{
     *     InvestigationId: string,
     *     Status: 'RUNNING'|'COMPLETED'|'FAILED',
     *     TriggerPrompt: string,
     *     TriggeredBy: string,
     *     Metadata?: InvestigationMetadata|null,
     *     Cloud?: CloudDetails|null,
     *     RiskLevel?: 'Info'|'Low'|'Medium'|'High'|'Critical'|null,
     *     Risk?: string|null,
     *     Confidence?: 'Unknown'|'Low'|'Medium'|'High'|null,
     *     Summary?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Error?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
