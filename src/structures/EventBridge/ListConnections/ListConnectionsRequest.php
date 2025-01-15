<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NamePrefix
 * @property 'CREATING'|'UPDATING'|'DELETING'|'AUTHORIZED'|'DEAUTHORIZED'|'AUTHORIZING'|'DEAUTHORIZING'|'ACTIVE'|'FAILED_CONNECTIVITY'|null $ConnectionState
 * @property string|null $NextToken
 * @property int<1, 100>|null $Limit
 */
class ListConnectionsRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string|null,
     *     ConnectionState?: 'CREATING'|'UPDATING'|'DELETING'|'AUTHORIZED'|'DEAUTHORIZED'|'AUTHORIZING'|'DEAUTHORIZING'|'ACTIVE'|'FAILED_CONNECTIVITY'|null,
     *     NextToken?: string|null,
     *     Limit?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
