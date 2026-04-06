<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\ListStatements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string|null $QueryString
 * @property list<string>|null $QueryStrings
 * @property string|null $SecretArn
 * @property 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED'|'ALL'|null $Status
 * @property string|null $StatementName
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property list<SqlParameter>|null $QueryParameters
 * @property bool|null $IsBatchStatement
 * @property 'JSON'|'CSV'|null $ResultFormat
 * @property string|null $SessionId
 */
class StatementData extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     QueryString?: string|null,
     *     QueryStrings?: list<string>|null,
     *     SecretArn?: string|null,
     *     Status?: 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED'|'ALL'|null,
     *     StatementName?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     QueryParameters?: list<SqlParameter>|null,
     *     IsBatchStatement?: bool|null,
     *     ResultFormat?: 'JSON'|'CSV'|null,
     *     SessionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
