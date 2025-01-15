<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceExperiment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property 'ShadowMode' $Type
 * @property Shapes\InferenceExperimentSchedule|null $Schedule
 * @property 'Creating'|'Created'|'Updating'|'Running'|'Starting'|'Stopping'|'Completed'|'Cancelled' $Status
 * @property string|null $StatusReason
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $RoleArn
 * @property Shapes\EndpointMetadata $EndpointMetadata
 * @property list<Shapes\ModelVariantConfigSummary> $ModelVariants
 * @property Shapes\InferenceExperimentDataStorageConfig|null $DataStorageConfig
 * @property Shapes\ShadowModeConfig|null $ShadowModeConfig
 * @property string|null $KmsKey
 */
class DescribeInferenceExperimentResponse extends Response
{
}
