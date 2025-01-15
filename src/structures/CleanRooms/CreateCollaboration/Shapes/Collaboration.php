<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateCollaboration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string|null $description
 * @property string $creatorAccountId
 * @property string $creatorDisplayName
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property 'INVITED'|'ACTIVE'|'LEFT'|'REMOVED' $memberStatus
 * @property string|null $membershipId
 * @property string|null $membershipArn
 * @property DataEncryptionMetadata|null $dataEncryptionMetadata
 * @property 'ENABLED'|'DISABLED' $queryLogStatus
 * @property 'SPARK'|'CLEAN_ROOMS_SQL'|null $analyticsEngine
 */
class Collaboration extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     name: string,
     *     description?: string|null,
     *     creatorAccountId: string,
     *     creatorDisplayName: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     memberStatus: 'INVITED'|'ACTIVE'|'LEFT'|'REMOVED',
     *     membershipId?: string|null,
     *     membershipArn?: string|null,
     *     dataEncryptionMetadata?: DataEncryptionMetadata|null,
     *     queryLogStatus: 'ENABLED'|'DISABLED',
     *     analyticsEngine?: 'SPARK'|'CLEAN_ROOMS_SQL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
