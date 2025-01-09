<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REMOVE'|'MODIFY' $RemediationActionType
 * @property string $Description
 * @property SecurityGroupRuleDescription $RemediationResult
 * @property bool $IsDefaultAction
 */
class SecurityGroupRemediationAction extends Shape
{
    /**
     * @param array{
     *     RemediationActionType?: 'REMOVE'|'MODIFY',
     *     Description?: string,
     *     RemediationResult?: SecurityGroupRuleDescription,
     *     IsDefaultAction?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
