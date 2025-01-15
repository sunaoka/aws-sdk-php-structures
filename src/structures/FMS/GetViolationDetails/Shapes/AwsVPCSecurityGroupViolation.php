<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ViolationTarget
 * @property string|null $ViolationTargetDescription
 * @property list<PartialMatch>|null $PartialMatches
 * @property list<SecurityGroupRemediationAction>|null $PossibleSecurityGroupRemediationActions
 */
class AwsVPCSecurityGroupViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string|null,
     *     ViolationTargetDescription?: string|null,
     *     PartialMatches?: list<PartialMatch>|null,
     *     PossibleSecurityGroupRemediationActions?: list<SecurityGroupRemediationAction>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
