<?php

namespace Sunaoka\Aws\Structures\mgn\StartCutover\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $creationDateTime
 * @property string|null $endDateTime
 * @property 'START_TEST'|'START_CUTOVER'|'DIAGNOSTIC'|'TERMINATE'|null $initiatedBy
 * @property string $jobID
 * @property list<ParticipatingServer>|null $participatingServers
 * @property 'PENDING'|'STARTED'|'COMPLETED'|null $status
 * @property array<string, string>|null $tags
 * @property 'LAUNCH'|'TERMINATE'|null $type
 */
class Job extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     creationDateTime?: string|null,
     *     endDateTime?: string|null,
     *     initiatedBy?: 'START_TEST'|'START_CUTOVER'|'DIAGNOSTIC'|'TERMINATE'|null,
     *     jobID: string,
     *     participatingServers?: list<ParticipatingServer>|null,
     *     status?: 'PENDING'|'STARTED'|'COMPLETED'|null,
     *     tags?: array<string, string>|null,
     *     type?: 'LAUNCH'|'TERMINATE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
