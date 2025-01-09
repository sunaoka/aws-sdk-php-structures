<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeSourceServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $applicationIDs
 * @property bool $isArchived
 * @property list<'STOPPED'|'NOT_READY'|'READY_FOR_TEST'|'TESTING'|'READY_FOR_CUTOVER'|'CUTTING_OVER'|'CUTOVER'|'DISCONNECTED'|'DISCOVERED'|'PENDING_INSTALLATION'> $lifeCycleStates
 * @property list<'AGENT_BASED'|'SNAPSHOT_SHIPPING'> $replicationTypes
 * @property list<string> $sourceServerIDs
 */
class DescribeSourceServersRequestFilters extends Shape
{
    /**
     * @param array{
     *     applicationIDs?: list<string>,
     *     isArchived?: bool,
     *     lifeCycleStates?: list<'STOPPED'|'NOT_READY'|'READY_FOR_TEST'|'TESTING'|'READY_FOR_CUTOVER'|'CUTTING_OVER'|'CUTOVER'|'DISCONNECTED'|'DISCOVERED'|'PENDING_INSTALLATION'>,
     *     replicationTypes?: list<'AGENT_BASED'|'SNAPSHOT_SHIPPING'>,
     *     sourceServerIDs?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
