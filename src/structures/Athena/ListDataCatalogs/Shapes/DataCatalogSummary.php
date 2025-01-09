<?php

namespace Sunaoka\Aws\Structures\Athena\ListDataCatalogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogName
 * @property 'LAMBDA'|'GLUE'|'HIVE'|'FEDERATED' $Type
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'CREATE_FAILED_CLEANUP_IN_PROGRESS'|'CREATE_FAILED_CLEANUP_COMPLETE'|'CREATE_FAILED_CLEANUP_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED' $Status
 * @property 'DYNAMODB'|'MYSQL'|'POSTGRESQL'|'REDSHIFT'|'ORACLE'|'SYNAPSE'|'SQLSERVER'|'DB2'|'OPENSEARCH'|'BIGQUERY'|'GOOGLECLOUDSTORAGE'|'HBASE'|'DOCUMENTDB'|'CMDB'|'TPCDS'|'TIMESTREAM'|'SAPHANA'|'SNOWFLAKE'|'DATALAKEGEN2'|'DB2AS400' $ConnectionType
 * @property string $Error
 */
class DataCatalogSummary extends Shape
{
    /**
     * @param array{
     *     CatalogName?: string,
     *     Type?: 'LAMBDA'|'GLUE'|'HIVE'|'FEDERATED',
     *     Status?: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'CREATE_FAILED_CLEANUP_IN_PROGRESS'|'CREATE_FAILED_CLEANUP_COMPLETE'|'CREATE_FAILED_CLEANUP_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED',
     *     ConnectionType?: 'DYNAMODB'|'MYSQL'|'POSTGRESQL'|'REDSHIFT'|'ORACLE'|'SYNAPSE'|'SQLSERVER'|'DB2'|'OPENSEARCH'|'BIGQUERY'|'GOOGLECLOUDSTORAGE'|'HBASE'|'DOCUMENTDB'|'CMDB'|'TPCDS'|'TIMESTREAM'|'SAPHANA'|'SNOWFLAKE'|'DATALAKEGEN2'|'DB2AS400',
     *     Error?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
