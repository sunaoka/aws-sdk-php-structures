<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceExperiment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property 'ShadowMode' $Type
 * @property Shapes\InferenceExperimentSchedule $Schedule
 * @property 'Creating'|'Created'|'Updating'|'Running'|'Starting'|'Stopping'|'Completed'|'Cancelled' $Status
 * @property string $StatusReason
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $CompletionTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $RoleArn
 * @property Shapes\EndpointMetadata $EndpointMetadata
 * @property list<Shapes\ModelVariantConfigSummary> $ModelVariants
 * @property Shapes\InferenceExperimentDataStorageConfig $DataStorageConfig
 * @property Shapes\ShadowModeConfig $ShadowModeConfig
 * @property string $KmsKey
 */
class DescribeInferenceExperimentResponse extends Response
{
}
