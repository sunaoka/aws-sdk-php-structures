<?php

namespace Sunaoka\Aws\Structures\DataZone\GetConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ConnectionCredentials $connectionCredentials
 * @property string $connectionId
 * @property string $description
 * @property string $domainId
 * @property string $domainUnitId
 * @property string $environmentId
 * @property string $environmentUserRole
 * @property string $name
 * @property list<Shapes\PhysicalEndpoint> $physicalEndpoints
 * @property string $projectId
 * @property Shapes\ConnectionPropertiesOutput $props
 * @property 'ATHENA'|'BIGQUERY'|'DATABRICKS'|'DOCUMENTDB'|'DYNAMODB'|'HYPERPOD'|'IAM'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'SAPHANA'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'VERTICA'|'WORKFLOWS_MWAA' $type
 */
class GetConnectionResponse extends Response
{
}
