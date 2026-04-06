<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Targets
 * @property list<'TLS_SNI'|'HTTP_HOST'> $TargetTypes
 * @property 'ALLOWLIST'|'DENYLIST' $GeneratedRulesType
 */
class RulesSourceList extends Shape
{
    /**
     * @param array{
     *     Targets: list<string>,
     *     TargetTypes: list<'TLS_SNI'|'HTTP_HOST'>,
     *     GeneratedRulesType: 'ALLOWLIST'|'DENYLIST'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
