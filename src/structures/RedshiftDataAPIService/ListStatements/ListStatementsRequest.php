<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\ListStatements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<0, 100>|null $MaxResults
 * @property string|null $StatementName
 * @property 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED'|'ALL'|null $Status
 * @property bool|null $RoleLevel
 * @property string|null $Database
 * @property string|null $ClusterIdentifier
 * @property string|null $WorkgroupName
 */
class ListStatementsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 100>|null,
     *     StatementName?: string|null,
     *     Status?: 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED'|'ALL'|null,
     *     RoleLevel?: bool|null,
     *     Database?: string|null,
     *     ClusterIdentifier?: string|null,
     *     WorkgroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
