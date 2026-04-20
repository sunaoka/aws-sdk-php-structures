<?php

namespace Sunaoka\Aws\Structures\Evs\CreateEnvironmentConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KEY_REUSE'|'KEY_COVERAGE'|'REACHABILITY'|'HOST_COUNT'|'VCENTER_REACHABILITY'|'VCENTER_VM_SYNC'|'VCENTER_VM_EVENT'|null $type
 * @property 'PASSED'|'FAILED'|'UNKNOWN'|null $result
 * @property \Aws\Api\DateTimeResult|null $lastCheckAttempt
 * @property \Aws\Api\DateTimeResult|null $impairedSince
 */
class ConnectorCheck extends Shape
{
    /**
     * @param array{
     *     type?: 'KEY_REUSE'|'KEY_COVERAGE'|'REACHABILITY'|'HOST_COUNT'|'VCENTER_REACHABILITY'|'VCENTER_VM_SYNC'|'VCENTER_VM_EVENT'|null,
     *     result?: 'PASSED'|'FAILED'|'UNKNOWN'|null,
     *     lastCheckAttempt?: \Aws\Api\DateTimeResult|null,
     *     impairedSince?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
