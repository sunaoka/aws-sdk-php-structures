<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectionId
 * @property string $domainId
 * @property string $domainUnitId
 * @property string|null $environmentId
 * @property string $name
 * @property list<PhysicalEndpoint> $physicalEndpoints
 * @property string|null $projectId
 * @property ConnectionPropertiesOutput|null $props
 * @property 'DOMAIN'|'PROJECT'|null $scope
 * @property 'ATHENA'|'BIGQUERY'|'DATABRICKS'|'DOCUMENTDB'|'DYNAMODB'|'HYPERPOD'|'IAM'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'S3'|'SAPHANA'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'VERTICA'|'WORKFLOWS_MWAA'|'AMAZON_Q'|'MLFLOW' $type
 */
class ConnectionSummary extends Shape
{
    /**
     * @param array{
     *     connectionId: string,
     *     domainId: string,
     *     domainUnitId: string,
     *     environmentId?: string|null,
     *     name: string,
     *     physicalEndpoints: list<PhysicalEndpoint>,
     *     projectId?: string|null,
     *     props?: ConnectionPropertiesOutput|null,
     *     scope?: 'DOMAIN'|'PROJECT'|null,
     *     type: 'ATHENA'|'BIGQUERY'|'DATABRICKS'|'DOCUMENTDB'|'DYNAMODB'|'HYPERPOD'|'IAM'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'S3'|'SAPHANA'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'VERTICA'|'WORKFLOWS_MWAA'|'AMAZON_Q'|'MLFLOW'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
