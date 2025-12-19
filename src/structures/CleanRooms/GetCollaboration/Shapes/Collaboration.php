<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaboration\Shapes;

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
 * @property 'ENABLED'|'DISABLED'|null $jobLogStatus
 * @property 'SPARK'|'CLEAN_ROOMS_SQL'|null $analyticsEngine
 * @property list<'ADD_MEMBER'|'GRANT_RECEIVE_RESULTS_ABILITY'|'REVOKE_RECEIVE_RESULTS_ABILITY'>|null $autoApprovedChangeTypes
 * @property list<'us-west-1'|'us-west-2'|'us-east-1'|'us-east-2'|'af-south-1'|'ap-east-1'|'ap-east-2'|'ap-south-2'|'ap-southeast-1'|'ap-southeast-2'|'ap-southeast-3'|'ap-southeast-5'|'ap-southeast-4'|'ap-southeast-7'|'ap-south-1'|'ap-northeast-3'|'ap-northeast-1'|'ap-northeast-2'|'ca-central-1'|'ca-west-1'|'eu-south-1'|'eu-west-3'|'eu-south-2'|'eu-central-2'|'eu-central-1'|'eu-north-1'|'eu-west-1'|'eu-west-2'|'me-south-1'|'me-central-1'|'il-central-1'|'sa-east-1'|'mx-central-1'>|null $allowedResultRegions
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
     *     jobLogStatus?: 'ENABLED'|'DISABLED'|null,
     *     analyticsEngine?: 'SPARK'|'CLEAN_ROOMS_SQL'|null,
     *     autoApprovedChangeTypes?: list<'ADD_MEMBER'|'GRANT_RECEIVE_RESULTS_ABILITY'|'REVOKE_RECEIVE_RESULTS_ABILITY'>|null,
     *     allowedResultRegions?: list<'us-west-1'|'us-west-2'|'us-east-1'|'us-east-2'|'af-south-1'|'ap-east-1'|'ap-east-2'|'ap-south-2'|'ap-southeast-1'|'ap-southeast-2'|'ap-southeast-3'|'ap-southeast-5'|'ap-southeast-4'|'ap-southeast-7'|'ap-south-1'|'ap-northeast-3'|'ap-northeast-1'|'ap-northeast-2'|'ca-central-1'|'ca-west-1'|'eu-south-1'|'eu-west-3'|'eu-south-2'|'eu-central-2'|'eu-central-1'|'eu-north-1'|'eu-west-1'|'eu-west-2'|'me-south-1'|'me-central-1'|'il-central-1'|'sa-east-1'|'mx-central-1'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
