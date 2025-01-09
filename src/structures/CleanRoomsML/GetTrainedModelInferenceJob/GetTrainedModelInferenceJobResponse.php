<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetTrainedModelInferenceJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $trainedModelInferenceJobArn
 * @property string $configuredModelAlgorithmAssociationArn
 * @property string $name
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'CANCEL_PENDING'|'CANCEL_IN_PROGRESS'|'CANCEL_FAILED'|'INACTIVE' $status
 * @property string $trainedModelArn
 * @property Shapes\InferenceResourceConfig $resourceConfig
 * @property Shapes\InferenceOutputConfiguration $outputConfiguration
 * @property string $membershipIdentifier
 * @property Shapes\ModelInferenceDataSource $dataSource
 * @property Shapes\InferenceContainerExecutionParameters $containerExecutionParameters
 * @property Shapes\StatusDetails $statusDetails
 * @property string $description
 * @property string $inferenceContainerImageDigest
 * @property array<string, string> $environment
 * @property string $kmsKeyArn
 * @property 'PUBLISH_SUCCEEDED'|'PUBLISH_FAILED' $metricsStatus
 * @property string $metricsStatusDetails
 * @property 'PUBLISH_SUCCEEDED'|'PUBLISH_FAILED' $logsStatus
 * @property string $logsStatusDetails
 * @property array<string, string> $tags
 */
class GetTrainedModelInferenceJobResponse extends Response
{
}
