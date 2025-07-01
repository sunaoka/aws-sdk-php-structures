<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListTrainedModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $trainedModelArn
 * @property string|null $versionIdentifier
 * @property list<IncrementalTrainingDataChannelOutput>|null $incrementalTrainingDataChannels
 * @property string $name
 * @property string|null $description
 * @property string $membershipIdentifier
 * @property string $collaborationIdentifier
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'INACTIVE'|'CANCEL_PENDING'|'CANCEL_IN_PROGRESS'|'CANCEL_FAILED' $status
 * @property string $configuredModelAlgorithmAssociationArn
 */
class TrainedModelSummary extends Shape
{
    /**
     * @param array{
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     trainedModelArn: string,
     *     versionIdentifier?: string|null,
     *     incrementalTrainingDataChannels?: list<IncrementalTrainingDataChannelOutput>|null,
     *     name: string,
     *     description?: string|null,
     *     membershipIdentifier: string,
     *     collaborationIdentifier: string,
     *     status: 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'INACTIVE'|'CANCEL_PENDING'|'CANCEL_IN_PROGRESS'|'CANCEL_FAILED',
     *     configuredModelAlgorithmAssociationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
