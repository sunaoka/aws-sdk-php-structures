<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $membershipId
 * @property string $applicationId
 * @property string $agentSpaceId
 * @property 'USER' $memberType
 * @property MembershipConfig|null $config
 * @property MemberMetadata|null $metadata
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $createdBy
 * @property string $updatedBy
 */
class MembershipSummary extends Shape
{
    /**
     * @param array{
     *     membershipId: string,
     *     applicationId: string,
     *     agentSpaceId: string,
     *     memberType: 'USER',
     *     config?: MembershipConfig|null,
     *     metadata?: MemberMetadata|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     updatedBy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
