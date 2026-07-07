<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TENANT'|'SUBSCRIPTION' $scopeType
 * @property list<string>|null $scopeValues
 * @property 'ACTIVE'|'PENDING'|'ERROR'|'DISABLED'|null $state
 * @property string|null $stateReason
 */
class ScopeConfiguration extends Shape
{
    /**
     * @param array{
     *     scopeType: 'TENANT'|'SUBSCRIPTION',
     *     scopeValues?: list<string>|null,
     *     state?: 'ACTIVE'|'PENDING'|'ERROR'|'DISABLED'|null,
     *     stateReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
