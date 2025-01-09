<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $connectionId
 * @property string $description
 * @property string $domainId
 * @property string $domainUnitId
 * @property string $environmentId
 * @property string $name
 * @property list<Shapes\PhysicalEndpoint> $physicalEndpoints
 * @property string $projectId
 * @property Shapes\ConnectionPropertiesOutput $props
 * @property 'ATHENA'|'BIGQUERY'|'DATABRICKS'|'DOCUMENTDB'|'DYNAMODB'|'HYPERPOD'|'IAM'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'SAPHANA'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'VERTICA'|'WORKFLOWS_MWAA' $type
 */
class UpdateConnectionResponse extends Response
{
}
