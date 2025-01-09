<?php

namespace Sunaoka\Aws\Structures\Rds\RebootDBShardGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBShardGroupIdentifier
 */
class RebootDBShardGroupRequest extends Request
{
    /**
     * @param array{DBShardGroupIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
