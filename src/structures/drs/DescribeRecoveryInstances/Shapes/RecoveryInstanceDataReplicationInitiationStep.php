<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINK_FAILBACK_CLIENT_WITH_RECOVERY_INSTANCE'|'COMPLETE_VOLUME_MAPPING'|'ESTABLISH_RECOVERY_INSTANCE_COMMUNICATION'|'DOWNLOAD_REPLICATION_SOFTWARE_TO_FAILBACK_CLIENT'|'CONFIGURE_REPLICATION_SOFTWARE'|'PAIR_AGENT_WITH_REPLICATION_SOFTWARE'|'ESTABLISH_AGENT_REPLICATOR_SOFTWARE_COMMUNICATION'|'WAIT'|'CREATE_SECURITY_GROUP'|'LAUNCH_REPLICATION_SERVER'|'BOOT_REPLICATION_SERVER'|'AUTHENTICATE_WITH_SERVICE'|'DOWNLOAD_REPLICATION_SOFTWARE'|'CREATE_STAGING_DISKS'|'ATTACH_STAGING_DISKS'|'PAIR_REPLICATION_SERVER_WITH_AGENT'|'CONNECT_AGENT_TO_REPLICATION_SERVER'|'START_DATA_TRANSFER'|null $name
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'SKIPPED'|null $status
 */
class RecoveryInstanceDataReplicationInitiationStep extends Shape
{
    /**
     * @param array{
     *     name?: 'LINK_FAILBACK_CLIENT_WITH_RECOVERY_INSTANCE'|'COMPLETE_VOLUME_MAPPING'|'ESTABLISH_RECOVERY_INSTANCE_COMMUNICATION'|'DOWNLOAD_REPLICATION_SOFTWARE_TO_FAILBACK_CLIENT'|'CONFIGURE_REPLICATION_SOFTWARE'|'PAIR_AGENT_WITH_REPLICATION_SOFTWARE'|'ESTABLISH_AGENT_REPLICATOR_SOFTWARE_COMMUNICATION'|'WAIT'|'CREATE_SECURITY_GROUP'|'LAUNCH_REPLICATION_SERVER'|'BOOT_REPLICATION_SERVER'|'AUTHENTICATE_WITH_SERVICE'|'DOWNLOAD_REPLICATION_SOFTWARE'|'CREATE_STAGING_DISKS'|'ATTACH_STAGING_DISKS'|'PAIR_REPLICATION_SERVER_WITH_AGENT'|'CONNECT_AGENT_TO_REPLICATION_SERVER'|'START_DATA_TRANSFER'|null,
     *     status?: 'NOT_STARTED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'SKIPPED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
