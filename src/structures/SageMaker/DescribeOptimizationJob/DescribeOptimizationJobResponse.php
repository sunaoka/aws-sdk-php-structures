<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeOptimizationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $OptimizationJobArn
 * @property 'INPROGRESS'|'COMPLETED'|'FAILED'|'STARTING'|'STOPPING'|'STOPPED' $OptimizationJobStatus
 * @property \Aws\Api\DateTimeResult $OptimizationStartTime
 * @property \Aws\Api\DateTimeResult $OptimizationEndTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $FailureReason
 * @property string $OptimizationJobName
 * @property Shapes\OptimizationJobModelSource $ModelSource
 * @property array<string, string> $OptimizationEnvironment
 * @property 'ml.p4d.24xlarge'|'ml.p4de.24xlarge'|'ml.p5.48xlarge'|'ml.g5.xlarge'|'ml.g5.2xlarge'|'ml.g5.4xlarge'|'ml.g5.8xlarge'|'ml.g5.12xlarge'|'ml.g5.16xlarge'|'ml.g5.24xlarge'|'ml.g5.48xlarge'|'ml.g6.xlarge'|'ml.g6.2xlarge'|'ml.g6.4xlarge'|'ml.g6.8xlarge'|'ml.g6.12xlarge'|'ml.g6.16xlarge'|'ml.g6.24xlarge'|'ml.g6.48xlarge'|'ml.inf2.xlarge'|'ml.inf2.8xlarge'|'ml.inf2.24xlarge'|'ml.inf2.48xlarge'|'ml.trn1.2xlarge'|'ml.trn1.32xlarge'|'ml.trn1n.32xlarge' $DeploymentInstanceType
 * @property list<Shapes\OptimizationConfig> $OptimizationConfigs
 * @property Shapes\OptimizationJobOutputConfig $OutputConfig
 * @property Shapes\OptimizationOutput $OptimizationOutput
 * @property string $RoleArn
 * @property Shapes\StoppingCondition $StoppingCondition
 * @property Shapes\OptimizationVpcConfig $VpcConfig
 */
class DescribeOptimizationJobResponse extends Response
{
}
