<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetAWSDefaultServiceQuota\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESOURCE'|'ACCOUNT'|null $ContextScope
 * @property string|null $ContextScopeType
 * @property string|null $ContextId
 */
class QuotaContextInfo extends Shape
{
    /**
     * @param array{
     *     ContextScope?: 'RESOURCE'|'ACCOUNT'|null,
     *     ContextScopeType?: string|null,
     *     ContextId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
