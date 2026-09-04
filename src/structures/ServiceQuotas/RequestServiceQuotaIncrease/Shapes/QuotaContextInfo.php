<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\RequestServiceQuotaIncrease\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESOURCE'|'ACCOUNT'|null $ContextScope
 * @property string|null $ContextScopeType
 * @property string|null $ContextId
 * @property 'ACCOUNT'|'PER_RESOURCE'|'ALL'|null $AdjustableAtLevel
 */
class QuotaContextInfo extends Shape
{
    /**
     * @param array{
     *     ContextScope?: 'RESOURCE'|'ACCOUNT'|null,
     *     ContextScopeType?: string|null,
     *     ContextId?: string|null,
     *     AdjustableAtLevel?: 'ACCOUNT'|'PER_RESOURCE'|'ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
