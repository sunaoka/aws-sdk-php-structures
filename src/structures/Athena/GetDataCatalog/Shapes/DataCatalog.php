<?php

namespace Sunaoka\Aws\Structures\Athena\GetDataCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Description
 * @property 'LAMBDA'|'GLUE'|'HIVE'|'FEDERATED' $Type
 * @property array<string, string>|null $Parameters
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'CREATE_FAILED_CLEANUP_IN_PROGRESS'|'CREATE_FAILED_CLEANUP_COMPLETE'|'CREATE_FAILED_CLEANUP_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|null $Status
 * @property 'DYNAMODB'|'MYSQL'|'POSTGRESQL'|'REDSHIFT'|'ORACLE'|'SYNAPSE'|'SQLSERVER'|'DB2'|'OPENSEARCH'|'BIGQUERY'|'GOOGLECLOUDSTORAGE'|'HBASE'|'DOCUMENTDB'|'CMDB'|'TPCDS'|'TIMESTREAM'|'SAPHANA'|'SNOWFLAKE'|'DATALAKEGEN2'|'DB2AS400'|null $ConnectionType
 * @property string|null $Error
 */
class DataCatalog extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Type: 'LAMBDA'|'GLUE'|'HIVE'|'FEDERATED',
     *     Parameters?: array<string, string>|null,
     *     Status?: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'CREATE_FAILED_CLEANUP_IN_PROGRESS'|'CREATE_FAILED_CLEANUP_COMPLETE'|'CREATE_FAILED_CLEANUP_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|null,
     *     ConnectionType?: 'DYNAMODB'|'MYSQL'|'POSTGRESQL'|'REDSHIFT'|'ORACLE'|'SYNAPSE'|'SQLSERVER'|'DB2'|'OPENSEARCH'|'BIGQUERY'|'GOOGLECLOUDSTORAGE'|'HBASE'|'DOCUMENTDB'|'CMDB'|'TPCDS'|'TIMESTREAM'|'SAPHANA'|'SNOWFLAKE'|'DATALAKEGEN2'|'DB2AS400'|null,
     *     Error?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
