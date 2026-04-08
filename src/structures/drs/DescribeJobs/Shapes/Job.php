<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobID
 * @property string|null $arn
 * @property 'LAUNCH'|'TERMINATE'|'CREATE_CONVERTED_SNAPSHOT'|null $type
 * @property 'START_RECOVERY'|'START_DRILL'|'FAILBACK'|'DIAGNOSTIC'|'TERMINATE_RECOVERY_INSTANCES'|'TARGET_ACCOUNT'|'CREATE_NETWORK_RECOVERY'|'UPDATE_NETWORK_RECOVERY'|'ASSOCIATE_NETWORK_RECOVERY'|null $initiatedBy
 * @property string|null $creationDateTime
 * @property string|null $endDateTime
 * @property 'PENDING'|'STARTED'|'COMPLETED'|null $status
 * @property list<ParticipatingServer>|null $participatingServers
 * @property array<string, string>|null $tags
 * @property list<ParticipatingResource>|null $participatingResources
 */
class Job extends Shape
{
    /**
     * @param array{
     *     jobID: string,
     *     arn?: string|null,
     *     type?: 'LAUNCH'|'TERMINATE'|'CREATE_CONVERTED_SNAPSHOT'|null,
     *     initiatedBy?: 'START_RECOVERY'|'START_DRILL'|'FAILBACK'|'DIAGNOSTIC'|'TERMINATE_RECOVERY_INSTANCES'|'TARGET_ACCOUNT'|'CREATE_NETWORK_RECOVERY'|'UPDATE_NETWORK_RECOVERY'|'ASSOCIATE_NETWORK_RECOVERY'|null,
     *     creationDateTime?: string|null,
     *     endDateTime?: string|null,
     *     status?: 'PENDING'|'STARTED'|'COMPLETED'|null,
     *     participatingServers?: list<ParticipatingServer>|null,
     *     tags?: array<string, string>|null,
     *     participatingResources?: list<ParticipatingResource>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
