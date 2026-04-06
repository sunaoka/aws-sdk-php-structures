<?php

namespace Sunaoka\Aws\Structures\Billing\GetBillingView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HEALTHY'|'UNHEALTHY'|'CREATING'|'UPDATING'|null $statusCode
 * @property list<'SOURCE_VIEW_UNHEALTHY'|'SOURCE_VIEW_UPDATING'|'SOURCE_VIEW_ACCESS_DENIED'|'SOURCE_VIEW_NOT_FOUND'|'CYCLIC_DEPENDENCY'|'SOURCE_VIEW_DEPTH_EXCEEDED'|'AGGREGATE_SOURCE'|'VIEW_OWNER_NOT_MANAGEMENT_ACCOUNT'>|null $statusReasons
 */
class BillingViewHealthStatus extends Shape
{
    /**
     * @param array{
     *     statusCode?: 'HEALTHY'|'UNHEALTHY'|'CREATING'|'UPDATING'|null,
     *     statusReasons?: list<'SOURCE_VIEW_UNHEALTHY'|'SOURCE_VIEW_UPDATING'|'SOURCE_VIEW_ACCESS_DENIED'|'SOURCE_VIEW_NOT_FOUND'|'CYCLIC_DEPENDENCY'|'SOURCE_VIEW_DEPTH_EXCEEDED'|'AGGREGATE_SOURCE'|'VIEW_OWNER_NOT_MANAGEMENT_ACCOUNT'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
