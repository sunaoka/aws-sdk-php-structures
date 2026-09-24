<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\UpdateSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EVENT'|'REQUEST_RESPONSE'|null $InvocationType
 * @property string|null $Qualifier
 * @property string|null $DurableExecutionName
 * @property string|null $TenantId
 * @property string|null $InvocationTimeoutSeconds
 */
class LambdaParameters extends Shape
{
    /**
     * @param array{
     *     InvocationType?: 'EVENT'|'REQUEST_RESPONSE'|null,
     *     Qualifier?: string|null,
     *     DurableExecutionName?: string|null,
     *     TenantId?: string|null,
     *     InvocationTimeoutSeconds?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
