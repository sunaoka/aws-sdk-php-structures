<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListResourceConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $amazonManaged
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $name
 * @property string $resourceConfigurationGroupId
 * @property string $resourceGatewayId
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property 'GROUP'|'CHILD'|'SINGLE'|'ARN' $type
 */
class ResourceConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     amazonManaged?: bool,
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     id?: string,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     name?: string,
     *     resourceConfigurationGroupId?: string,
     *     resourceGatewayId?: string,
     *     status?: 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED',
     *     type?: 'GROUP'|'CHILD'|'SINGLE'|'ARN'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
