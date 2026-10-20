<?php

namespace Sunaoka\Aws\Structures\ElastiCache\StopMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerlessCacheName
 */
class StopMigrationRequest extends Request
{
    /**
     * @param array{ServerlessCacheName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
