<?php

namespace Sunaoka\Aws\Structures\Evs\ListEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property list<'CREATING'|'CREATED'|'DELETING'|'DELETED'|'CREATE_FAILED'>|null $state
 */
class ListEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     state?: list<'CREATING'|'CREATED'|'DELETING'|'DELETED'|'CREATE_FAILED'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
