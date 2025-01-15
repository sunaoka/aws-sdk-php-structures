<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetImpersonationRole\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImpersonationRuleId
 * @property string|null $Name
 * @property string|null $Description
 * @property 'ALLOW'|'DENY' $Effect
 * @property list<string>|null $TargetUsers
 * @property list<string>|null $NotTargetUsers
 */
class ImpersonationRule extends Shape
{
    /**
     * @param array{
     *     ImpersonationRuleId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Effect: 'ALLOW'|'DENY',
     *     TargetUsers?: list<string>|null,
     *     NotTargetUsers?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
