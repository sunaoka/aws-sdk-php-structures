<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\ListStatements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string $Id
 * @property bool|null $IsBatchStatement
 * @property list<SqlParameter>|null $QueryParameters
 * @property string|null $QueryString
 * @property list<string>|null $QueryStrings
 * @property 'JSON'|'CSV'|null $ResultFormat
 * @property string|null $SecretArn
 * @property string|null $SessionId
 * @property string|null $StatementName
 * @property 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED'|'ALL'|null $Status
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class StatementData extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Id: string,
     *     IsBatchStatement?: bool|null,
     *     QueryParameters?: list<SqlParameter>|null,
     *     QueryString?: string|null,
     *     QueryStrings?: list<string>|null,
     *     ResultFormat?: 'JSON'|'CSV'|null,
     *     SecretArn?: string|null,
     *     SessionId?: string|null,
     *     StatementName?: string|null,
     *     Status?: 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED'|'ALL'|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
