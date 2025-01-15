<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\ListStatements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $RoleLevel
 * @property string|null $StatementName
 * @property 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED'|'ALL'|null $Status
 */
class ListStatementsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<0, 100>|null,
     *     NextToken?: string|null,
     *     RoleLevel?: bool|null,
     *     StatementName?: string|null,
     *     Status?: 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED'|'ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
