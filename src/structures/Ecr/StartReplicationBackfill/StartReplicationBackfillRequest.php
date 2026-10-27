<?php

namespace Sunaoka\Aws\Structures\Ecr\StartReplicationBackfill;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property Shapes\ReplicationDestination $destination
 */
class StartReplicationBackfillRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     destination: Shapes\ReplicationDestination
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
