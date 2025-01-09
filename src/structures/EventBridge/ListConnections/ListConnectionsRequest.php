<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamePrefix
 * @property 'CREATING'|'UPDATING'|'DELETING'|'AUTHORIZED'|'DEAUTHORIZED'|'AUTHORIZING'|'DEAUTHORIZING'|'ACTIVE'|'FAILED_CONNECTIVITY' $ConnectionState
 * @property string $NextToken
 * @property int<1, 100> $Limit
 */
class ListConnectionsRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string,
     *     ConnectionState?: 'CREATING'|'UPDATING'|'DELETING'|'AUTHORIZED'|'DEAUTHORIZED'|'AUTHORIZING'|'DEAUTHORIZING'|'ACTIVE'|'FAILED_CONNECTIVITY',
     *     NextToken?: string,
     *     Limit?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
