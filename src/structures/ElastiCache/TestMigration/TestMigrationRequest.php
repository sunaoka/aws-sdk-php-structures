<?php

namespace Sunaoka\Aws\Structures\ElastiCache\TestMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationGroupId
 * @property list<Shapes\CustomerNodeEndpoint> $CustomerNodeEndpointList
 */
class TestMigrationRequest extends Request
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
