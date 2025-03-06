<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\ListStatements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterIdentifier
 * @property string|null $Database
 * @property int<0, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $RoleLevel
 * @property string|null $StatementName
 * @property 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED'|'ALL'|null $Status
 * @property string|null $WorkgroupName
 */
class ListStatementsRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string|null,
     *     Database?: string|null,
     *     MaxResults?: int<0, 100>|null,
     *     NextToken?: string|null,
     *     RoleLevel?: bool|null,
     *     StatementName?: string|null,
     *     Status?: 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED'|'ALL'|null,
     *     WorkgroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
