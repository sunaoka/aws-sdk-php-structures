<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\RequestServiceQuotaIncrease\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESOURCE'|'ACCOUNT' $ContextScope
 * @property string $ContextScopeType
 * @property string $ContextId
 */
class QuotaContextInfo extends Shape
{
    /**
     * @param array{
     *     ContextScope?: 'RESOURCE'|'ACCOUNT',
     *     ContextScopeType?: string,
     *     ContextId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
