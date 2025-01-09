<?php

namespace Sunaoka\Aws\Structures\drs\StartFailbackLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $creationDateTime
 * @property string $endDateTime
 * @property 'START_RECOVERY'|'START_DRILL'|'FAILBACK'|'DIAGNOSTIC'|'TERMINATE_RECOVERY_INSTANCES'|'TARGET_ACCOUNT'|'CREATE_NETWORK_RECOVERY'|'UPDATE_NETWORK_RECOVERY'|'ASSOCIATE_NETWORK_RECOVERY' $initiatedBy
 * @property string $jobID
 * @property list<ParticipatingResource> $participatingResources
 * @property list<ParticipatingServer> $participatingServers
 * @property 'PENDING'|'STARTED'|'COMPLETED' $status
 * @property array<string, string> $tags
 * @property 'LAUNCH'|'TERMINATE'|'CREATE_CONVERTED_SNAPSHOT' $type
 */
class Job extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     creationDateTime?: string,
     *     endDateTime?: string,
     *     initiatedBy?: 'START_RECOVERY'|'START_DRILL'|'FAILBACK'|'DIAGNOSTIC'|'TERMINATE_RECOVERY_INSTANCES'|'TARGET_ACCOUNT'|'CREATE_NETWORK_RECOVERY'|'UPDATE_NETWORK_RECOVERY'|'ASSOCIATE_NETWORK_RECOVERY',
     *     jobID: string,
     *     participatingResources?: list<ParticipatingResource>,
     *     participatingServers?: list<ParticipatingServer>,
     *     status?: 'PENDING'|'STARTED'|'COMPLETED',
     *     tags?: array<string, string>,
     *     type?: 'LAUNCH'|'TERMINATE'|'CREATE_CONVERTED_SNAPSHOT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
