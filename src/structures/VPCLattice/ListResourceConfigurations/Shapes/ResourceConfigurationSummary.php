<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListResourceConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $resourceGatewayId
 * @property string|null $resourceConfigurationGroupId
 * @property 'GROUP'|'CHILD'|'SINGLE'|'ARN'|null $type
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|null $status
 * @property bool|null $amazonManaged
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class ResourceConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     arn?: string|null,
     *     resourceGatewayId?: string|null,
     *     resourceConfigurationGroupId?: string|null,
     *     type?: 'GROUP'|'CHILD'|'SINGLE'|'ARN'|null,
     *     status?: 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|null,
     *     amazonManaged?: bool|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
