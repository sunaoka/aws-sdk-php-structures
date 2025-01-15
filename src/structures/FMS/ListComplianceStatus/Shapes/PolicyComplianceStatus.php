<?php

namespace Sunaoka\Aws\Structures\FMS\ListComplianceStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyOwner
 * @property string|null $PolicyId
 * @property string|null $PolicyName
 * @property string|null $MemberAccount
 * @property list<EvaluationResult>|null $EvaluationResults
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property array<'AWSCONFIG'|'AWSWAF'|'AWSSHIELD_ADVANCED'|'AWSVPC', string>|null $IssueInfoMap
 */
class PolicyComplianceStatus extends Shape
{
    /**
     * @param array{
     *     PolicyOwner?: string|null,
     *     PolicyId?: string|null,
     *     PolicyName?: string|null,
     *     MemberAccount?: string|null,
     *     EvaluationResults?: list<EvaluationResult>|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     IssueInfoMap?: array<'AWSCONFIG'|'AWSWAF'|'AWSSHIELD_ADVANCED'|'AWSVPC', string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
