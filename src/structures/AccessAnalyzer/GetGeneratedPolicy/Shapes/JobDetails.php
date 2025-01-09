<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetGeneratedPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'CANCELED' $status
 * @property \Aws\Api\DateTimeResult $startedOn
 * @property \Aws\Api\DateTimeResult $completedOn
 * @property JobError $jobError
 */
class JobDetails extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     status: 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'CANCELED',
     *     startedOn: \Aws\Api\DateTimeResult,
     *     completedOn?: \Aws\Api\DateTimeResult,
     *     jobError?: JobError
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
