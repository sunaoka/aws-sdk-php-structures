<?php

namespace Sunaoka\Aws\Structures\RDSDataService\BatchExecuteStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $secretArn
 * @property string $sql
 * @property string|null $database
 * @property string|null $schema
 * @property list<list<Shapes\SqlParameter>>|null $parameterSets
 * @property string|null $transactionId
 */
class BatchExecuteStatementRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     secretArn: string,
     *     sql: string,
     *     database?: string|null,
     *     schema?: string|null,
     *     parameterSets?: list<list<Shapes\SqlParameter>>|null,
     *     transactionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
