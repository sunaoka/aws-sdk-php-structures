<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListCollaborationTrainedModelInferenceJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $trainedModelInferenceJobArn
 * @property string|null $configuredModelAlgorithmAssociationArn
 * @property string $membershipIdentifier
 * @property string $trainedModelArn
 * @property string|null $trainedModelVersionIdentifier
 * @property string $collaborationIdentifier
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'CANCEL_PENDING'|'CANCEL_IN_PROGRESS'|'CANCEL_FAILED'|'INACTIVE' $status
 * @property InferenceOutputConfiguration $outputConfiguration
 * @property string $name
 * @property string|null $description
 * @property 'PUBLISH_SUCCEEDED'|'PUBLISH_FAILED'|null $metricsStatus
 * @property string|null $metricsStatusDetails
 * @property 'PUBLISH_SUCCEEDED'|'PUBLISH_FAILED'|null $logsStatus
 * @property string|null $logsStatusDetails
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $creatorAccountId
 */
class CollaborationTrainedModelInferenceJobSummary extends Shape
{
    /**
     * @param array{
     *     trainedModelInferenceJobArn: string,
     *     configuredModelAlgorithmAssociationArn?: string|null,
     *     membershipIdentifier: string,
     *     trainedModelArn: string,
     *     trainedModelVersionIdentifier?: string|null,
     *     collaborationIdentifier: string,
     *     status: 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'CANCEL_PENDING'|'CANCEL_IN_PROGRESS'|'CANCEL_FAILED'|'INACTIVE',
     *     outputConfiguration: InferenceOutputConfiguration,
     *     name: string,
     *     description?: string|null,
     *     metricsStatus?: 'PUBLISH_SUCCEEDED'|'PUBLISH_FAILED'|null,
     *     metricsStatusDetails?: string|null,
     *     logsStatus?: 'PUBLISH_SUCCEEDED'|'PUBLISH_FAILED'|null,
     *     logsStatusDetails?: string|null,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     creatorAccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
