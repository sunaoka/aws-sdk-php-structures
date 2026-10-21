<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Targets
 * @property list<'TLS_SNI'|'HTTP_HOST'|'AWS_ROUTE_53_RESOLVED_DOMAIN'> $TargetTypes
 * @property 'ALLOWLIST'|'DENYLIST'|'REJECTLIST'|'ALERTLIST' $GeneratedRulesType
 */
class RulesSourceList extends Shape
{
    /**
     * @param array{
     *     Targets: list<string>,
     *     TargetTypes: list<'TLS_SNI'|'HTTP_HOST'|'AWS_ROUTE_53_RESOLVED_DOMAIN'>,
     *     GeneratedRulesType: 'ALLOWLIST'|'DENYLIST'|'REJECTLIST'|'ALERTLIST'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
