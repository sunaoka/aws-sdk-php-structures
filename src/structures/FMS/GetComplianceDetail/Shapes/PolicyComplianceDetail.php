<?php

namespace Sunaoka\Aws\Structures\FMS\GetComplianceDetail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyOwner
 * @property string $PolicyId
 * @property string $MemberAccount
 * @property list<ComplianceViolator> $Violators
 * @property bool $EvaluationLimitExceeded
 * @property \Aws\Api\DateTimeResult $ExpiredAt
 * @property array<'AWSCONFIG'|'AWSWAF'|'AWSSHIELD_ADVANCED'|'AWSVPC', string> $IssueInfoMap
 */
class PolicyComplianceDetail extends Shape
{
    /**
     * @param array{
     *     PolicyOwner?: string,
     *     PolicyId?: string,
     *     MemberAccount?: string,
     *     Violators?: list<ComplianceViolator>,
     *     EvaluationLimitExceeded?: bool,
     *     ExpiredAt?: \Aws\Api\DateTimeResult,
     *     IssueInfoMap?: array<'AWSCONFIG'|'AWSWAF'|'AWSSHIELD_ADVANCED'|'AWSVPC', string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
