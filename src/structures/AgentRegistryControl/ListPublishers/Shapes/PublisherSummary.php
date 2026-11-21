<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\ListPublishers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identifier $value
 * @property 'DOMAIN'|null $identifierType
 * @property 'ACTION_REQUIRED'|'ACTIVE'|'FAILED'|'SUSPENDED'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $publisherArn
 * @property int<0, max>|null $associationCount
 * @property int<0, max>|null $pendingAssociationApprovalCount
 */
class PublisherSummary extends Shape
{
    /**
     * @param array{
     *     value: Identifier,
     *     identifierType?: 'DOMAIN'|null,
     *     status: 'ACTION_REQUIRED'|'ACTIVE'|'FAILED'|'SUSPENDED'|'DELETING',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     publisherArn: string,
     *     associationCount?: int<0, max>|null,
     *     pendingAssociationApprovalCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
