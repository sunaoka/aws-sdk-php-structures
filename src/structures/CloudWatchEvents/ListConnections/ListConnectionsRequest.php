<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamePrefix
 * @property 'CREATING'|'UPDATING'|'DELETING'|'AUTHORIZED'|'DEAUTHORIZED'|'AUTHORIZING'|'DEAUTHORIZING' $ConnectionState
 * @property string $NextToken
 * @property int $Limit
 */
class ListConnectionsRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string,
     *     ConnectionState?: 'CREATING'|'UPDATING'|'DELETING'|'AUTHORIZED'|'DEAUTHORIZED'|'AUTHORIZING'|'DEAUTHORIZING',
     *     NextToken?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
