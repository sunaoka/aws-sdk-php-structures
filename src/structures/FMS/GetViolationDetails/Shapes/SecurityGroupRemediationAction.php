<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REMOVE'|'MODIFY'|null $RemediationActionType
 * @property string|null $Description
 * @property SecurityGroupRuleDescription|null $RemediationResult
 * @property bool|null $IsDefaultAction
 */
class SecurityGroupRemediationAction extends Shape
{
    /**
     * @param array{
     *     RemediationActionType?: 'REMOVE'|'MODIFY'|null,
     *     Description?: string|null,
     *     RemediationResult?: SecurityGroupRuleDescription|null,
     *     IsDefaultAction?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
