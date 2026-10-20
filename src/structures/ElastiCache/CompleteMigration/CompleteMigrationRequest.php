<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CompleteMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReplicationGroupId
 * @property string|null $ServerlessCacheName
 * @property bool|null $Force
 */
class CompleteMigrationRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId?: string|null,
     *     ServerlessCacheName?: string|null,
     *     Force?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
