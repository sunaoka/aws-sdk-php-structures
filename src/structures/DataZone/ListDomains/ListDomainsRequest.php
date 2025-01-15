<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 * @property 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED'|null $status
 */
class ListDomainsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null,
     *     status?: 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
