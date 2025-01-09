<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetTrainedModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $membershipIdentifier
 * @property string $collaborationIdentifier
 * @property string $trainedModelArn
 * @property string $name
 * @property string $description
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'INACTIVE'|'CANCEL_PENDING'|'CANCEL_IN_PROGRESS'|'CANCEL_FAILED' $status
 * @property Shapes\StatusDetails $statusDetails
 * @property string $configuredModelAlgorithmAssociationArn
 * @property Shapes\ResourceConfig $resourceConfig
 * @property Shapes\StoppingCondition $stoppingCondition
 * @property 'PUBLISH_SUCCEEDED'|'PUBLISH_FAILED' $metricsStatus
 * @property string $metricsStatusDetails
 * @property 'PUBLISH_SUCCEEDED'|'PUBLISH_FAILED' $logsStatus
 * @property string $logsStatusDetails
 * @property string $trainingContainerImageDigest
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property array<string, string> $hyperparameters
 * @property array<string, string> $environment
 * @property string $kmsKeyArn
 * @property array<string, string> $tags
 * @property list<Shapes\ModelTrainingDataChannel> $dataChannels
 */
class GetTrainedModelResponse extends Response
{
}
