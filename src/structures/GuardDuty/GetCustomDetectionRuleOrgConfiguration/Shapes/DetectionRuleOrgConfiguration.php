<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetCustomDetectionRuleOrgConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleId
 * @property 'LIVE'|'DRY_RUN' $Mode
 * @property 'ACTIVE'|'PROCESSING'|'FAILED' $Status
 * @property string|null $StatusReason
 * @property list<string> $IncludeAccountIds
 * @property list<string> $ExcludeAccountIds
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 */
class DetectionRuleOrgConfiguration extends Shape
{
    /**
     * @param array{
     *     RuleId: string,
     *     Mode: 'LIVE'|'DRY_RUN',
     *     Status: 'ACTIVE'|'PROCESSING'|'FAILED',
     *     StatusReason?: string|null,
     *     IncludeAccountIds: list<string>,
     *     ExcludeAccountIds: list<string>,
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
