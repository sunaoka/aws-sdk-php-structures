<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetTrainedModelInferenceJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $trainedModelInferenceJobArn
 * @property string|null $configuredModelAlgorithmAssociationArn
 * @property string $name
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'CANCEL_PENDING'|'CANCEL_IN_PROGRESS'|'CANCEL_FAILED'|'INACTIVE' $status
 * @property string $trainedModelArn
 * @property string|null $trainedModelVersionIdentifier
 * @property Shapes\InferenceResourceConfig $resourceConfig
 * @property Shapes\InferenceOutputConfiguration $outputConfiguration
 * @property string $membershipIdentifier
 * @property Shapes\ModelInferenceDataSource $dataSource
 * @property Shapes\InferenceContainerExecutionParameters|null $containerExecutionParameters
 * @property Shapes\StatusDetails|null $statusDetails
 * @property string|null $description
 * @property string|null $inferenceContainerImageDigest
 * @property array<string, string>|null $environment
 * @property string|null $kmsKeyArn
 * @property 'PUBLISH_SUCCEEDED'|'PUBLISH_FAILED'|null $metricsStatus
 * @property string|null $metricsStatusDetails
 * @property 'PUBLISH_SUCCEEDED'|'PUBLISH_FAILED'|null $logsStatus
 * @property string|null $logsStatusDetails
 * @property array<string, string>|null $tags
 */
class GetTrainedModelInferenceJobResponse extends Response
{
}
