<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<10, 2000000000> $Limit
 * @property int $EvaluationWindowSec
 * @property 'IP'|'FORWARDED_IP'|'CUSTOM_KEYS'|'CONSTANT' $AggregateKeyType
 * @property Statement $ScopeDownStatement
 * @property ForwardedIPConfig $ForwardedIPConfig
 * @property list<RateBasedStatementCustomKey> $CustomKeys
 */
class RateBasedStatement extends Shape
{
    /**
     * @param array{
     *     Limit: int<10, 2000000000>,
     *     EvaluationWindowSec?: int,
     *     AggregateKeyType: 'IP'|'FORWARDED_IP'|'CUSTOM_KEYS'|'CONSTANT',
     *     ScopeDownStatement?: Statement,
     *     ForwardedIPConfig?: ForwardedIPConfig,
     *     CustomKeys?: list<RateBasedStatementCustomKey>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
