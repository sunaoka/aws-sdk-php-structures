<?php

namespace Sunaoka\Aws\Structures\mgn\MarkAsArchived\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AGENT_NOT_SEEN'|'SNAPSHOTS_FAILURE'|'NOT_CONVERGING'|'UNSTABLE_NETWORK'|'FAILED_TO_CREATE_SECURITY_GROUP'|'FAILED_TO_LAUNCH_REPLICATION_SERVER'|'FAILED_TO_BOOT_REPLICATION_SERVER'|'FAILED_TO_AUTHENTICATE_WITH_SERVICE'|'FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE'|'FAILED_TO_CREATE_STAGING_DISKS'|'FAILED_TO_ATTACH_STAGING_DISKS'|'FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT'|'FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER'|'FAILED_TO_START_DATA_TRANSFER'|'UNSUPPORTED_VM_CONFIGURATION'|'LAST_SNAPSHOT_JOB_FAILED'|null $error
 * @property string|null $rawError
 */
class DataReplicationError extends Shape
{
    /**
     * @param array{
     *     error?: 'AGENT_NOT_SEEN'|'SNAPSHOTS_FAILURE'|'NOT_CONVERGING'|'UNSTABLE_NETWORK'|'FAILED_TO_CREATE_SECURITY_GROUP'|'FAILED_TO_LAUNCH_REPLICATION_SERVER'|'FAILED_TO_BOOT_REPLICATION_SERVER'|'FAILED_TO_AUTHENTICATE_WITH_SERVICE'|'FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE'|'FAILED_TO_CREATE_STAGING_DISKS'|'FAILED_TO_ATTACH_STAGING_DISKS'|'FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT'|'FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER'|'FAILED_TO_START_DATA_TRANSFER'|'UNSUPPORTED_VM_CONFIGURATION'|'LAST_SNAPSHOT_JOB_FAILED'|null,
     *     rawError?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
