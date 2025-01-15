<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CompleteMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationGroupId
 * @property bool|null $Force
 */
class CompleteMigrationRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId: string,
     *     Force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
