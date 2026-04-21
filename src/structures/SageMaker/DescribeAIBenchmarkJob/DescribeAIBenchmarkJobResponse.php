<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIBenchmarkJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AIBenchmarkJobName
 * @property string $AIBenchmarkJobArn
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $AIBenchmarkJobStatus
 * @property string|null $FailureReason
 * @property Shapes\AIBenchmarkTarget $BenchmarkTarget
 * @property Shapes\AIBenchmarkOutputResult $OutputConfig
 * @property string $AIWorkloadConfigIdentifier
 * @property string $RoleArn
 * @property Shapes\AIBenchmarkNetworkConfig|null $NetworkConfig
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property list<Shapes\Tag>|null $Tags
 */
class DescribeAIBenchmarkJobResponse extends Response
{
}
