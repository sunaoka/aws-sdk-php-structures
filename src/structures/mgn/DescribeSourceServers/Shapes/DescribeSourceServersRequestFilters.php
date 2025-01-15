<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeSourceServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $applicationIDs
 * @property bool|null $isArchived
 * @property list<'STOPPED'|'NOT_READY'|'READY_FOR_TEST'|'TESTING'|'READY_FOR_CUTOVER'|'CUTTING_OVER'|'CUTOVER'|'DISCONNECTED'|'DISCOVERED'|'PENDING_INSTALLATION'>|null $lifeCycleStates
 * @property list<'AGENT_BASED'|'SNAPSHOT_SHIPPING'>|null $replicationTypes
 * @property list<string>|null $sourceServerIDs
 */
class DescribeSourceServersRequestFilters extends Shape
{
    /**
     * @param array{
     *     applicationIDs?: list<string>|null,
     *     isArchived?: bool|null,
     *     lifeCycleStates?: list<'STOPPED'|'NOT_READY'|'READY_FOR_TEST'|'TESTING'|'READY_FOR_CUTOVER'|'CUTTING_OVER'|'CUTOVER'|'DISCONNECTED'|'DISCOVERED'|'PENDING_INSTALLATION'>|null,
     *     replicationTypes?: list<'AGENT_BASED'|'SNAPSHOT_SHIPPING'>|null,
     *     sourceServerIDs?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
