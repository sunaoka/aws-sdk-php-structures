<?php

namespace Sunaoka\Aws\Structures\ElastiCache\StartMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ServerlessCacheName
 * @property string|null $ReplicationGroupId
 * @property list<Shapes\CustomerNodeEndpoint>|null $CustomerNodeEndpointList
 * @property bool|null $AutoCutover
 * @property bool|null $ClearTargetCacheData
 */
class StartMigrationRequest extends Request
{
    /**
     * @param array{
     *     ServerlessCacheName?: string|null,
     *     ReplicationGroupId?: string|null,
     *     CustomerNodeEndpointList?: list<Shapes\CustomerNodeEndpoint>|null,
     *     AutoCutover?: bool|null,
     *     ClearTargetCacheData?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
