<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListCollaborationTrainedModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $trainedModelArn
 * @property string $name
 * @property string $description
 * @property string $membershipIdentifier
 * @property string $collaborationIdentifier
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'INACTIVE'|'CANCEL_PENDING'|'CANCEL_IN_PROGRESS'|'CANCEL_FAILED' $status
 * @property string $configuredModelAlgorithmAssociationArn
 * @property string $creatorAccountId
 */
class CollaborationTrainedModelSummary extends Shape
{
    /**
     * @param array{
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     trainedModelArn: string,
     *     name: string,
     *     description?: string,
     *     membershipIdentifier: string,
     *     collaborationIdentifier: string,
     *     status: 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'INACTIVE'|'CANCEL_PENDING'|'CANCEL_IN_PROGRESS'|'CANCEL_FAILED',
     *     configuredModelAlgorithmAssociationArn: string,
     *     creatorAccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
