<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateImpersonationRole\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImpersonationRuleId
 * @property string $Name
 * @property string $Description
 * @property 'ALLOW'|'DENY' $Effect
 * @property list<string> $TargetUsers
 * @property list<string> $NotTargetUsers
 */
class ImpersonationRule extends Shape
{
    /**
     * @param array{
     *     ImpersonationRuleId: string,
     *     Name?: string,
     *     Description?: string,
     *     Effect: 'ALLOW'|'DENY',
     *     TargetUsers?: list<string>,
     *     NotTargetUsers?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
