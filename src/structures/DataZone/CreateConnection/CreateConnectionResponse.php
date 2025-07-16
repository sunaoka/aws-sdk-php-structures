<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $connectionId
 * @property string|null $description
 * @property string $domainId
 * @property string $domainUnitId
 * @property string|null $environmentId
 * @property string $name
 * @property list<Shapes\PhysicalEndpoint> $physicalEndpoints
 * @property string|null $projectId
 * @property Shapes\ConnectionPropertiesOutput|null $props
 * @property 'ATHENA'|'BIGQUERY'|'DATABRICKS'|'DOCUMENTDB'|'DYNAMODB'|'HYPERPOD'|'IAM'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'S3'|'SAPHANA'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'VERTICA'|'WORKFLOWS_MWAA' $type
 */
class CreateConnectionResponse extends Response
{
}
