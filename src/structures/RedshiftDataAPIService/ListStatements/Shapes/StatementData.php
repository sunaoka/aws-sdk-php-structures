<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\ListStatements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $Id
 * @property bool $IsBatchStatement
 * @property list<SqlParameter> $QueryParameters
 * @property string $QueryString
 * @property list<string> $QueryStrings
 * @property 'JSON'|'CSV' $ResultFormat
 * @property string $SecretArn
 * @property string $SessionId
 * @property string $StatementName
 * @property 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED'|'ALL' $Status
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class StatementData extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     Id: string,
     *     IsBatchStatement?: bool,
     *     QueryParameters?: list<SqlParameter>,
     *     QueryString?: string,
     *     QueryStrings?: list<string>,
     *     ResultFormat?: 'JSON'|'CSV',
     *     SecretArn?: string,
     *     SessionId?: string,
     *     StatementName?: string,
     *     Status?: 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED'|'ALL',
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
