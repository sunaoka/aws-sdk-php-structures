<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCustomDetectionRuleOrgConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleId
 * @property 'LIVE'|'DRY_RUN' $Mode
 * @property 'ACTIVE'|'PROCESSING'|'FAILED' $Status
 * @property string|null $StatusReason
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 */
class DetectionRuleOrgConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     RuleId: string,
     *     Mode: 'LIVE'|'DRY_RUN',
     *     Status: 'ACTIVE'|'PROCESSING'|'FAILED',
     *     StatusReason?: string|null,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     ExpiresAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
