<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationDeployedStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logicalID
 * @property 'CREATE_FAILED'|'DELETE_FAILED'|null $status
 * @property string|null $statusReason
 */
class NetworkMigrationFailedResourceDetails extends Shape
{
    /**
     * @param array{
     *     logicalID?: string|null,
     *     status?: 'CREATE_FAILED'|'DELETE_FAILED'|null,
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
