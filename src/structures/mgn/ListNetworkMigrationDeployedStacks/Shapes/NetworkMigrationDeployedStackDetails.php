<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationDeployedStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATE_COMPLETE'|'CREATE_FAILED'|'CREATE_STARTED'|'DELETE_COMPLETE'|'DELETE_FAILED'|'DELETE_STARTED'|null $status
 * @property string|null $stackPhysicalID
 * @property string|null $stackLogicalID
 * @property string|null $segmentID
 * @property string|null $targetAccount
 * @property list<NetworkMigrationFailedResourceDetails>|null $failedResources
 */
class NetworkMigrationDeployedStackDetails extends Shape
{
    /**
     * @param array{
     *     status?: 'CREATE_COMPLETE'|'CREATE_FAILED'|'CREATE_STARTED'|'DELETE_COMPLETE'|'DELETE_FAILED'|'DELETE_STARTED'|null,
     *     stackPhysicalID?: string|null,
     *     stackLogicalID?: string|null,
     *     segmentID?: string|null,
     *     targetAccount?: string|null,
     *     failedResources?: list<NetworkMigrationFailedResourceDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
