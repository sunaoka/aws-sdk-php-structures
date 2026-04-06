<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobID
 * @property string|null $arn
 * @property 'LAUNCH'|'TERMINATE'|null $type
 * @property 'START_TEST'|'START_CUTOVER'|'DIAGNOSTIC'|'TERMINATE'|null $initiatedBy
 * @property string|null $creationDateTime
 * @property string|null $endDateTime
 * @property 'PENDING'|'STARTED'|'COMPLETED'|null $status
 * @property list<ParticipatingServer>|null $participatingServers
 * @property array<string, string>|null $tags
 */
class Job extends Shape
{
    /**
     * @param array{
     *     jobID: string,
     *     arn?: string|null,
     *     type?: 'LAUNCH'|'TERMINATE'|null,
     *     initiatedBy?: 'START_TEST'|'START_CUTOVER'|'DIAGNOSTIC'|'TERMINATE'|null,
     *     creationDateTime?: string|null,
     *     endDateTime?: string|null,
     *     status?: 'PENDING'|'STARTED'|'COMPLETED'|null,
     *     participatingServers?: list<ParticipatingServer>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
