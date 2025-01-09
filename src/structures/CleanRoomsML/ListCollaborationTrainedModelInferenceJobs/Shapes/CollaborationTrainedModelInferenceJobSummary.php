<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListCollaborationTrainedModelInferenceJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $trainedModelInferenceJobArn
 * @property string $configuredModelAlgorithmAssociationArn
 * @property string $membershipIdentifier
 * @property string $trainedModelArn
 * @property string $collaborationIdentifier
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'CANCEL_PENDING'|'CANCEL_IN_PROGRESS'|'CANCEL_FAILED'|'INACTIVE' $status
 * @property InferenceOutputConfiguration $outputConfiguration
 * @property string $name
 * @property string $description
 * @property 'PUBLISH_SUCCEEDED'|'PUBLISH_FAILED' $metricsStatus
 * @property string $metricsStatusDetails
 * @property 'PUBLISH_SUCCEEDED'|'PUBLISH_FAILED' $logsStatus
 * @property string $logsStatusDetails
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $creatorAccountId
 */
class CollaborationTrainedModelInferenceJobSummary extends Shape
{
    /**
     * @param array{
     *     trainedModelInferenceJobArn: string,
     *     configuredModelAlgorithmAssociationArn?: string,
     *     membershipIdentifier: string,
     *     trainedModelArn: string,
     *     collaborationIdentifier: string,
     *     status: 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'CANCEL_PENDING'|'CANCEL_IN_PROGRESS'|'CANCEL_FAILED'|'INACTIVE',
     *     outputConfiguration: InferenceOutputConfiguration,
     *     name: string,
     *     description?: string,
     *     metricsStatus?: 'PUBLISH_SUCCEEDED'|'PUBLISH_FAILED',
     *     metricsStatusDetails?: string,
     *     logsStatus?: 'PUBLISH_SUCCEEDED'|'PUBLISH_FAILED',
     *     logsStatusDetails?: string,
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
