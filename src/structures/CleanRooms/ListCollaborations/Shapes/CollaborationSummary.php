<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string $creatorAccountId
 * @property string $creatorDisplayName
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property 'INVITED'|'ACTIVE'|'LEFT'|'REMOVED' $memberStatus
 * @property string $membershipId
 * @property string $membershipArn
 * @property 'SPARK'|'CLEAN_ROOMS_SQL' $analyticsEngine
 */
class CollaborationSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     name: string,
     *     creatorAccountId: string,
     *     creatorDisplayName: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     memberStatus: 'INVITED'|'ACTIVE'|'LEFT'|'REMOVED',
     *     membershipId?: string,
     *     membershipArn?: string,
     *     analyticsEngine?: 'SPARK'|'CLEAN_ROOMS_SQL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
