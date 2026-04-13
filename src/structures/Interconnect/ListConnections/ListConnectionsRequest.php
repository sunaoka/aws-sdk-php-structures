<?php

namespace Sunaoka\Aws\Structures\Interconnect\ListConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'available'|'requested'|'pending'|'down'|'deleting'|'deleted'|'failed'|'updating'|null $state
 * @property string|null $environmentId
 * @property Shapes\Provider|null $provider
 * @property Shapes\AttachPoint|null $attachPoint
 */
class ListConnectionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     state?: 'available'|'requested'|'pending'|'down'|'deleting'|'deleted'|'failed'|'updating'|null,
     *     environmentId?: string|null,
     *     provider?: Shapes\Provider|null,
     *     attachPoint?: Shapes\AttachPoint|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
