<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRemediationsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetUid
 * @property RemediationOutcome $Outcome
 * @property 'Critical'|'High'|'Medium'|'Low' $Priority
 * @property RemediationSummaryDetail $RemediationSummary
 * @property RemediationResource $Resource
 * @property 'New'|'Updated'|'Resolved' $Status
 * @property RemediationTrait $Trait
 * @property RemediationGuidance|null $Guidance
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class RemediationV2Item extends Shape
{
    /**
     * @param array{
     *     TargetUid: string,
     *     Outcome: RemediationOutcome,
     *     Priority: 'Critical'|'High'|'Medium'|'Low',
     *     RemediationSummary: RemediationSummaryDetail,
     *     Resource: RemediationResource,
     *     Status: 'New'|'Updated'|'Resolved',
     *     Trait: RemediationTrait,
     *     Guidance?: RemediationGuidance|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
