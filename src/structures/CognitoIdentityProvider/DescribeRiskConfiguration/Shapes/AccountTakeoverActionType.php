<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeRiskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Notify
 * @property 'BLOCK'|'MFA_IF_CONFIGURED'|'MFA_REQUIRED'|'NO_ACTION' $EventAction
 */
class AccountTakeoverActionType extends Shape
{
    /**
     * @param array{
     *     Notify: bool,
     *     EventAction: 'BLOCK'|'MFA_IF_CONFIGURED'|'MFA_REQUIRED'|'NO_ACTION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
