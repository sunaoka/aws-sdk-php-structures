<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ViolationTarget
 * @property string $ViolationTargetDescription
 * @property list<PartialMatch> $PartialMatches
 * @property list<SecurityGroupRemediationAction> $PossibleSecurityGroupRemediationActions
 */
class AwsVPCSecurityGroupViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string,
     *     ViolationTargetDescription?: string,
     *     PartialMatches?: list<PartialMatch>,
     *     PossibleSecurityGroupRemediationActions?: list<SecurityGroupRemediationAction>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
