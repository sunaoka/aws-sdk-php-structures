<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $secretArn
 * @property string $sql
 * @property string $database
 * @property string $schema
 * @property list<Shapes\SqlParameter> $parameters
 * @property string $transactionId
 * @property bool $includeResultMetadata
 * @property bool $continueAfterTimeout
 * @property Shapes\ResultSetOptions $resultSetOptions
 * @property 'NONE'|'JSON' $formatRecordsAs
 */
class ExecuteStatementRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     secretArn: string,
     *     sql: string,
     *     database?: string,
     *     schema?: string,
     *     parameters?: list<Shapes\SqlParameter>,
     *     transactionId?: string,
     *     includeResultMetadata?: bool,
     *     continueAfterTimeout?: bool,
     *     resultSetOptions?: Shapes\ResultSetOptions,
     *     formatRecordsAs?: 'NONE'|'JSON'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
