<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListResourceConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $amazonManaged
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $name
 * @property string|null $resourceConfigurationGroupId
 * @property string|null $resourceGatewayId
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|null $status
 * @property 'GROUP'|'CHILD'|'SINGLE'|'ARN'|null $type
 */
class ResourceConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     amazonManaged?: bool|null,
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     id?: string|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     name?: string|null,
     *     resourceConfigurationGroupId?: string|null,
     *     resourceGatewayId?: string|null,
     *     status?: 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|null,
     *     type?: 'GROUP'|'CHILD'|'SINGLE'|'ARN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
