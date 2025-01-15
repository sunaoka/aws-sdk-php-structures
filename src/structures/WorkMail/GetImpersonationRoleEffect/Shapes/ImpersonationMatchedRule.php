<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetImpersonationRoleEffect\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ImpersonationRuleId
 * @property string|null $Name
 */
class ImpersonationMatchedRule extends Shape
{
    /**
     * @param array{
     *     ImpersonationRuleId?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
