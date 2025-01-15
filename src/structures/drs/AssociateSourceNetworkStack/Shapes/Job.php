<?php

namespace Sunaoka\Aws\Structures\drs\AssociateSourceNetworkStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $creationDateTime
 * @property string|null $endDateTime
 * @property 'START_RECOVERY'|'START_DRILL'|'FAILBACK'|'DIAGNOSTIC'|'TERMINATE_RECOVERY_INSTANCES'|'TARGET_ACCOUNT'|'CREATE_NETWORK_RECOVERY'|'UPDATE_NETWORK_RECOVERY'|'ASSOCIATE_NETWORK_RECOVERY'|null $initiatedBy
 * @property string $jobID
 * @property list<ParticipatingResource>|null $participatingResources
 * @property list<ParticipatingServer>|null $participatingServers
 * @property 'PENDING'|'STARTED'|'COMPLETED'|null $status
 * @property array<string, string>|null $tags
 * @property 'LAUNCH'|'TERMINATE'|'CREATE_CONVERTED_SNAPSHOT'|null $type
 */
class Job extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     creationDateTime?: string|null,
     *     endDateTime?: string|null,
     *     initiatedBy?: 'START_RECOVERY'|'START_DRILL'|'FAILBACK'|'DIAGNOSTIC'|'TERMINATE_RECOVERY_INSTANCES'|'TARGET_ACCOUNT'|'CREATE_NETWORK_RECOVERY'|'UPDATE_NETWORK_RECOVERY'|'ASSOCIATE_NETWORK_RECOVERY'|null,
     *     jobID: string,
     *     participatingResources?: list<ParticipatingResource>|null,
     *     participatingServers?: list<ParticipatingServer>|null,
     *     status?: 'PENDING'|'STARTED'|'COMPLETED'|null,
     *     tags?: array<string, string>|null,
     *     type?: 'LAUNCH'|'TERMINATE'|'CREATE_CONVERTED_SNAPSHOT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
