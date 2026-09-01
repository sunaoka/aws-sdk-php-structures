<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetCustomDetectionRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleId
 * @property string $Arn
 * @property string $Name
 * @property string $Description
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW' $Severity
 * @property 'CloudTrailManagementEvent' $DataSource
 * @property string $Tactic
 * @property string $Technique
 * @property string $Service
 * @property RuleDefinition $Definition
 * @property 'SQL'|null $Language
 * @property 'CloudTrail'|null $Schema
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class RuleDetail extends Shape
{
    /**
     * @param array{
     *     RuleId: string,
     *     Arn: string,
     *     Name: string,
     *     Description: string,
     *     Severity: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW',
     *     DataSource: 'CloudTrailManagementEvent',
     *     Tactic: string,
     *     Technique: string,
     *     Service: string,
     *     Definition: RuleDefinition,
     *     Language?: 'SQL'|null,
     *     Schema?: 'CloudTrail'|null,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
