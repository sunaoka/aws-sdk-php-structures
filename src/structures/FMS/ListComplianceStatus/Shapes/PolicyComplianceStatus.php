<?php

namespace Sunaoka\Aws\Structures\FMS\ListComplianceStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyOwner
 * @property string $PolicyId
 * @property string $PolicyName
 * @property string $MemberAccount
 * @property list<EvaluationResult> $EvaluationResults
 * @property \Aws\Api\DateTimeResult $LastUpdated
 * @property array<'AWSCONFIG'|'AWSWAF'|'AWSSHIELD_ADVANCED'|'AWSVPC', string> $IssueInfoMap
 */
class PolicyComplianceStatus extends Shape
{
    /**
     * @param array{
     *     PolicyOwner?: string,
     *     PolicyId?: string,
     *     PolicyName?: string,
     *     MemberAccount?: string,
     *     EvaluationResults?: list<EvaluationResult>,
     *     LastUpdated?: \Aws\Api\DateTimeResult,
     *     IssueInfoMap?: array<'AWSCONFIG'|'AWSWAF'|'AWSSHIELD_ADVANCED'|'AWSVPC', string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
