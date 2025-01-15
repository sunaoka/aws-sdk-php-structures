<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $secretArn
 * @property string $sql
 * @property string|null $database
 * @property string|null $schema
 * @property list<Shapes\SqlParameter>|null $parameters
 * @property string|null $transactionId
 * @property bool|null $includeResultMetadata
 * @property bool|null $continueAfterTimeout
 * @property Shapes\ResultSetOptions|null $resultSetOptions
 * @property 'NONE'|'JSON'|null $formatRecordsAs
 */
class ExecuteStatementRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     secretArn: string,
     *     sql: string,
     *     database?: string|null,
     *     schema?: string|null,
     *     parameters?: list<Shapes\SqlParameter>|null,
     *     transactionId?: string|null,
     *     includeResultMetadata?: bool|null,
     *     continueAfterTimeout?: bool|null,
     *     resultSetOptions?: Shapes\ResultSetOptions|null,
     *     formatRecordsAs?: 'NONE'|'JSON'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
