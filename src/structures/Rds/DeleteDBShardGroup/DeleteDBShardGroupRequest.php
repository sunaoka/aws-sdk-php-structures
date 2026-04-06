<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBShardGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBShardGroupIdentifier
 */
class DeleteDBShardGroupRequest extends Request
{
    /**
     * @param array{DBShardGroupIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
