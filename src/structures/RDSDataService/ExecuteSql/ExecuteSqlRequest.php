<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteSql;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dbClusterOrInstanceArn
 * @property string $awsSecretStoreArn
 * @property string $sqlStatements
 * @property string $database
 * @property string $schema
 */
class ExecuteSqlRequest extends Request
{
    /**
     * @param array{
     *     dbClusterOrInstanceArn: string,
     *     awsSecretStoreArn: string,
     *     sqlStatements: string,
     *     database?: string,
     *     schema?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
