<?php

namespace Sunaoka\Aws\Structures\drs\DisconnectSourceServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WAIT'|'CREATE_SECURITY_GROUP'|'LAUNCH_REPLICATION_SERVER'|'BOOT_REPLICATION_SERVER'|'AUTHENTICATE_WITH_SERVICE'|'DOWNLOAD_REPLICATION_SOFTWARE'|'CREATE_STAGING_DISKS'|'ATTACH_STAGING_DISKS'|'PAIR_REPLICATION_SERVER_WITH_AGENT'|'CONNECT_AGENT_TO_REPLICATION_SERVER'|'START_DATA_TRANSFER'|null $name
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'SKIPPED'|null $status
 */
class DataReplicationInitiationStep extends Shape
{
    /**
     * @param array{
     *     name?: 'WAIT'|'CREATE_SECURITY_GROUP'|'LAUNCH_REPLICATION_SERVER'|'BOOT_REPLICATION_SERVER'|'AUTHENTICATE_WITH_SERVICE'|'DOWNLOAD_REPLICATION_SOFTWARE'|'CREATE_STAGING_DISKS'|'ATTACH_STAGING_DISKS'|'PAIR_REPLICATION_SERVER_WITH_AGENT'|'CONNECT_AGENT_TO_REPLICATION_SERVER'|'START_DATA_TRANSFER'|null,
     *     status?: 'NOT_STARTED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'SKIPPED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
