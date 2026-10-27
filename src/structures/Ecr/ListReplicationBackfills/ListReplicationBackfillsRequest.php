<?php

namespace Sunaoka\Aws\Structures\Ecr\ListReplicationBackfills;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListReplicationBackfillsRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
