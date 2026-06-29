<?php

namespace Sunaoka\Aws\Structures\Evs\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KEY_REUSE'|'KEY_COVERAGE'|'REACHABILITY'|'HOST_COUNT'|'VCENTER_REACHABILITY'|'VCENTER_VM_SYNC'|'VCENTER_VM_EVENT'|'OPERATIONS_MANAGER_REACHABILITY'|'SDDC_MANAGER_REACHABILITY'|'SDDC_MANAGER_HOST_COUNT'|'SDDC_MANAGER_KEY_COVERAGE'|'SDDC_MANAGER_KEY_REUSE'|'CONNECTOR_HEALTH'|null $type
 * @property string|null $id
 * @property 'PASSED'|'FAILED'|'UNKNOWN'|null $result
 * @property \Aws\Api\DateTimeResult|null $impairedSince
 */
class Check extends Shape
{
    /**
     * @param array{
     *     type?: 'KEY_REUSE'|'KEY_COVERAGE'|'REACHABILITY'|'HOST_COUNT'|'VCENTER_REACHABILITY'|'VCENTER_VM_SYNC'|'VCENTER_VM_EVENT'|'OPERATIONS_MANAGER_REACHABILITY'|'SDDC_MANAGER_REACHABILITY'|'SDDC_MANAGER_HOST_COUNT'|'SDDC_MANAGER_KEY_COVERAGE'|'SDDC_MANAGER_KEY_REUSE'|'CONNECTOR_HEALTH'|null,
     *     id?: string|null,
     *     result?: 'PASSED'|'FAILED'|'UNKNOWN'|null,
     *     impairedSince?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
