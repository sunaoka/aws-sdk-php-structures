<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetImpersonationRoleEffect\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImpersonationRuleId
 * @property string $Name
 */
class ImpersonationMatchedRule extends Shape
{
    /**
     * @param array{
     *     ImpersonationRuleId?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
