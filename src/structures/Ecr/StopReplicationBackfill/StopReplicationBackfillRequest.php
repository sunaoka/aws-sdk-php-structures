<?php

namespace Sunaoka\Aws\Structures\Ecr\StopReplicationBackfill;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $replicationBackfillId
 */
class StopReplicationBackfillRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     replicationBackfillId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
