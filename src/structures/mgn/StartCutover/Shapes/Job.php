<?php

namespace Sunaoka\Aws\Structures\mgn\StartCutover\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $creationDateTime
 * @property string $endDateTime
 * @property 'START_TEST'|'START_CUTOVER'|'DIAGNOSTIC'|'TERMINATE' $initiatedBy
 * @property string $jobID
 * @property list<ParticipatingServer> $participatingServers
 * @property 'PENDING'|'STARTED'|'COMPLETED' $status
 * @property array<string, string> $tags
 * @property 'LAUNCH'|'TERMINATE' $type
 */
class Job extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     creationDateTime?: string,
     *     endDateTime?: string,
     *     initiatedBy?: 'START_TEST'|'START_CUTOVER'|'DIAGNOSTIC'|'TERMINATE',
     *     jobID: string,
     *     participatingServers?: list<ParticipatingServer>,
     *     status?: 'PENDING'|'STARTED'|'COMPLETED',
     *     tags?: array<string, string>,
     *     type?: 'LAUNCH'|'TERMINATE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
