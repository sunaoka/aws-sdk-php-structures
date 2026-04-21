<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAIBenchmarkJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AIBenchmarkJobName
 * @property string $AIBenchmarkJobArn
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $AIBenchmarkJobStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $AIWorkloadConfigName
 */
class AIBenchmarkJobSummary extends Shape
{
    /**
     * @param array{
     *     AIBenchmarkJobName: string,
     *     AIBenchmarkJobArn: string,
     *     AIBenchmarkJobStatus: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     AIWorkloadConfigName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
