<?php

namespace Sunaoka\Aws\Structures\ElastiCache\StartMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationGroupId
 * @property list<Shapes\CustomerNodeEndpoint> $CustomerNodeEndpointList
 */
class StartMigrationRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId: string,
     *     CustomerNodeEndpointList: list<Shapes\CustomerNodeEndpoint>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
