<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $gatewayArn
 * @property string|null $name
 * @property 'ACTIVE'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'DELETED'|null $status
 * @property string|null $statusReason
 * @property list<GatewayResourceFailure>|null $failures
 * @property string|null $infrastructureRoleArn
 * @property bool|null $deletionProtection
 * @property DescribeGatewayConfiguration|null $configuration
 * @property 'PUBLIC'|'PRIVATE'|null $accessType
 * @property 'NONE'|'GATEWAY'|null $propagateTags
 * @property list<Tag>|null $tags
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class Gateway extends Shape
{
    /**
     * @param array{
     *     gatewayArn?: string|null,
     *     name?: string|null,
     *     status?: 'ACTIVE'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'DELETED'|null,
     *     statusReason?: string|null,
     *     failures?: list<GatewayResourceFailure>|null,
     *     infrastructureRoleArn?: string|null,
     *     deletionProtection?: bool|null,
     *     configuration?: DescribeGatewayConfiguration|null,
     *     accessType?: 'PUBLIC'|'PRIVATE'|null,
     *     propagateTags?: 'NONE'|'GATEWAY'|null,
     *     tags?: list<Tag>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
