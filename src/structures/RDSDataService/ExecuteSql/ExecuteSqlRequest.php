<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteSql;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dbClusterOrInstanceArn
 * @property string $awsSecretStoreArn
 * @property string $sqlStatements
 * @property string|null $database
 * @property string|null $schema
 */
class ExecuteSqlRequest extends Request
{
    /**
     * @param array{
     *     dbClusterOrInstanceArn: string,
     *     awsSecretStoreArn: string,
     *     sqlStatements: string,
     *     database?: string|null,
     *     schema?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
