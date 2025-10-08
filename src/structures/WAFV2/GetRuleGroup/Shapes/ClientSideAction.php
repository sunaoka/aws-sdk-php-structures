<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $UsageOfAction
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $Sensitivity
 * @property list<Regex>|null $ExemptUriRegularExpressions
 */
class ClientSideAction extends Shape
{
    /**
     * @param array{
     *     UsageOfAction: 'ENABLED'|'DISABLED',
     *     Sensitivity?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     ExemptUriRegularExpressions?: list<Regex>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
