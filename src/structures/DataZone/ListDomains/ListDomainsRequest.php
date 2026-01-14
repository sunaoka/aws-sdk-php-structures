<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED'|null $status
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 */
class ListDomainsRequest extends Request
{
    /**
     * @param array{
     *     status?: 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED'|null,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
