<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\ListSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<0, 100>|null $MaxResults
 * @property string|null $SessionId
 * @property 'AVAILABLE'|'BUSY'|'CLOSED'|null $Status
 * @property bool|null $RoleLevel
 * @property string|null $ClusterIdentifier
 * @property string|null $WorkgroupName
 * @property string|null $Database
 */
class ListSessionsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 100>|null,
     *     SessionId?: string|null,
     *     Status?: 'AVAILABLE'|'BUSY'|'CLOSED'|null,
     *     RoleLevel?: bool|null,
     *     ClusterIdentifier?: string|null,
     *     WorkgroupName?: string|null,
     *     Database?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
