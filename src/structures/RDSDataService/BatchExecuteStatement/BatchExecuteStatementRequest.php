<?php

namespace Sunaoka\Aws\Structures\RDSDataService\BatchExecuteStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $secretArn
 * @property string $sql
 * @property string $database
 * @property string $schema
 * @property list<list<Shapes\SqlParameter>> $parameterSets
 * @property string $transactionId
 */
class BatchExecuteStatementRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     secretArn: string,
     *     sql: string,
     *     database?: string,
     *     schema?: string,
     *     parameterSets?: list<list<Shapes\SqlParameter>>,
     *     transactionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
