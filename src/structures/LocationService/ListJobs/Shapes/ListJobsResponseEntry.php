<?php

namespace Sunaoka\Aws\Structures\LocationService\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ValidateAddress' $Action
 * @property JobActionOptions|null $ActionOptions
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $ExecutionRoleArn
 * @property \Aws\Api\DateTimeResult|null $EndedAt
 * @property JobError|null $Error
 * @property JobInputOptions $InputOptions
 * @property string $JobId
 * @property string $JobArn
 * @property string|null $Name
 * @property JobOutputOptions $OutputOptions
 * @property 'Pending'|'Running'|'Completed'|'Failed'|'Cancelling'|'Cancelled' $Status
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class ListJobsResponseEntry extends Shape
{
    /**
     * @param array{
     *     Action: 'ValidateAddress',
     *     ActionOptions?: JobActionOptions|null,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     ExecutionRoleArn: string,
     *     EndedAt?: \Aws\Api\DateTimeResult|null,
     *     Error?: JobError|null,
     *     InputOptions: JobInputOptions,
     *     JobId: string,
     *     JobArn: string,
     *     Name?: string|null,
     *     OutputOptions: JobOutputOptions,
     *     Status: 'Pending'|'Running'|'Completed'|'Failed'|'Cancelling'|'Cancelled',
     *     UpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
