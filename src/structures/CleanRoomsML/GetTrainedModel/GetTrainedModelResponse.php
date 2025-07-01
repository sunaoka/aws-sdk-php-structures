<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetTrainedModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $membershipIdentifier
 * @property string $collaborationIdentifier
 * @property string $trainedModelArn
 * @property string|null $versionIdentifier
 * @property list<Shapes\IncrementalTrainingDataChannelOutput>|null $incrementalTrainingDataChannels
 * @property string $name
 * @property string|null $description
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'INACTIVE'|'CANCEL_PENDING'|'CANCEL_IN_PROGRESS'|'CANCEL_FAILED' $status
 * @property Shapes\StatusDetails|null $statusDetails
 * @property string $configuredModelAlgorithmAssociationArn
 * @property Shapes\ResourceConfig|null $resourceConfig
 * @property 'File'|'FastFile'|'Pipe'|null $trainingInputMode
 * @property Shapes\StoppingCondition|null $stoppingCondition
 * @property 'PUBLISH_SUCCEEDED'|'PUBLISH_FAILED'|null $metricsStatus
 * @property string|null $metricsStatusDetails
 * @property 'PUBLISH_SUCCEEDED'|'PUBLISH_FAILED'|null $logsStatus
 * @property string|null $logsStatusDetails
 * @property string|null $trainingContainerImageDigest
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property array<string, string>|null $hyperparameters
 * @property array<string, string>|null $environment
 * @property string|null $kmsKeyArn
 * @property array<string, string>|null $tags
 * @property list<Shapes\ModelTrainingDataChannel> $dataChannels
 */
class GetTrainedModelResponse extends Response
{
}
