<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<10, 2000000000> $Limit
 * @property int|null $EvaluationWindowSec
 * @property 'IP'|'FORWARDED_IP'|'CUSTOM_KEYS'|'CONSTANT' $AggregateKeyType
 * @property Statement|null $ScopeDownStatement
 * @property ForwardedIPConfig|null $ForwardedIPConfig
 * @property list<RateBasedStatementCustomKey>|null $CustomKeys
 */
class RateBasedStatement extends Shape
{
    /**
     * @param array{
     *     Limit: int<10, 2000000000>,
     *     EvaluationWindowSec?: int|null,
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
