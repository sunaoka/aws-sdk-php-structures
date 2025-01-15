<?php

namespace Sunaoka\Aws\Structures\FMS\GetComplianceDetail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyOwner
 * @property string|null $PolicyId
 * @property string|null $MemberAccount
 * @property list<ComplianceViolator>|null $Violators
 * @property bool|null $EvaluationLimitExceeded
 * @property \Aws\Api\DateTimeResult|null $ExpiredAt
 * @property array<'AWSCONFIG'|'AWSWAF'|'AWSSHIELD_ADVANCED'|'AWSVPC', string>|null $IssueInfoMap
 */
class PolicyComplianceDetail extends Shape
{
    /**
     * @param array{
     *     PolicyOwner?: string|null,
     *     PolicyId?: string|null,
     *     MemberAccount?: string|null,
     *     Violators?: list<ComplianceViolator>|null,
     *     EvaluationLimitExceeded?: bool|null,
     *     ExpiredAt?: \Aws\Api\DateTimeResult|null,
     *     IssueInfoMap?: array<'AWSCONFIG'|'AWSWAF'|'AWSSHIELD_ADVANCED'|'AWSVPC', string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
