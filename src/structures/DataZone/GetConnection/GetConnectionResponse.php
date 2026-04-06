<?php

namespace Sunaoka\Aws\Structures\DataZone\GetConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ConnectionCredentials|null $connectionCredentials
 * @property string $connectionId
 * @property string|null $description
 * @property string $domainId
 * @property string $domainUnitId
 * @property string|null $environmentId
 * @property string|null $environmentUserRole
 * @property string $name
 * @property list<Shapes\PhysicalEndpoint> $physicalEndpoints
 * @property string|null $projectId
 * @property Shapes\ConnectionPropertiesOutput|null $props
 * @property 'ATHENA'|'BIGQUERY'|'DATABRICKS'|'DOCUMENTDB'|'DYNAMODB'|'HYPERPOD'|'IAM'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'SAPHANA'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'VERTICA'|'WORKFLOWS_MWAA' $type
 */
class GetConnectionResponse extends Response
{
}
