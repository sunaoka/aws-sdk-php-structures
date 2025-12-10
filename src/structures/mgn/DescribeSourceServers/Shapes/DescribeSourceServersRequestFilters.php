<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeSourceServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $sourceServerIDs
 * @property bool|null $isArchived
 * @property list<'AGENT_BASED'|'SNAPSHOT_SHIPPING'>|null $replicationTypes
 * @property list<'STOPPED'|'NOT_READY'|'READY_FOR_TEST'|'TESTING'|'READY_FOR_CUTOVER'|'CUTTING_OVER'|'CUTOVER'|'DISCONNECTED'|'DISCOVERED'|'PENDING_INSTALLATION'>|null $lifeCycleStates
 * @property list<string>|null $applicationIDs
 */
class DescribeSourceServersRequestFilters extends Shape
{
    /**
     * @param array{
     *     sourceServerIDs?: list<string>|null,
     *     isArchived?: bool|null,
     *     replicationTypes?: list<'AGENT_BASED'|'SNAPSHOT_SHIPPING'>|null,
     *     lifeCycleStates?: list<'STOPPED'|'NOT_READY'|'READY_FOR_TEST'|'TESTING'|'READY_FOR_CUTOVER'|'CUTTING_OVER'|'CUTOVER'|'DISCONNECTED'|'DISCOVERED'|'PENDING_INSTALLATION'>|null,
     *     applicationIDs?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
