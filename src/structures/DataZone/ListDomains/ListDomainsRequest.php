<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 25> $maxResults
 * @property string $nextToken
 * @property 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED' $status
 */
class ListDomainsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 25>,
     *     nextToken?: string,
     *     status?: 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
