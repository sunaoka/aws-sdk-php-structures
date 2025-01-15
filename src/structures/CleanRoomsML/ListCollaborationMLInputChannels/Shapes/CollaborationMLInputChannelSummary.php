<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListCollaborationMLInputChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $membershipIdentifier
 * @property string $collaborationIdentifier
 * @property string $name
 * @property list<string> $configuredModelAlgorithmAssociations
 * @property string $mlInputChannelArn
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'INACTIVE' $status
 * @property string $creatorAccountId
 * @property string|null $description
 */
class CollaborationMLInputChannelSummary extends Shape
{
    /**
     * @param array{
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     membershipIdentifier: string,
     *     collaborationIdentifier: string,
     *     name: string,
     *     configuredModelAlgorithmAssociations: list<string>,
     *     mlInputChannelArn: string,
     *     status: 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'INACTIVE',
     *     creatorAccountId: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
