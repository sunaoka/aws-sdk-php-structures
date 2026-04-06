<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<100, 2000000000> $Limit
 * @property 'IP'|'FORWARDED_IP'|'CUSTOM_KEYS'|'CONSTANT' $AggregateKeyType
 * @property Statement|null $ScopeDownStatement
 * @property ForwardedIPConfig|null $ForwardedIPConfig
 * @property list<RateBasedStatementCustomKey>|null $CustomKeys
 */
class RateBasedStatement extends Shape
{
    /**
     * @param array{
     *     Limit: int<100, 2000000000>,
     *     AggregateKeyType: 'IP'|'FORWARDED_IP'|'CUSTOM_KEYS'|'CONSTANT',
     *     ScopeDownStatement?: Statement|null,
     *     ForwardedIPConfig?: ForwardedIPConfig|null,
     *     CustomKeys?: list<RateBasedStatementCustomKey>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
