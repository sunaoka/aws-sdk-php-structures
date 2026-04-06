<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $description
 * @property 'ATHENA'|'BIGQUERY'|'DATABRICKS'|'DOCUMENTDB'|'DYNAMODB'|'HYPERPOD'|'IAM'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'S3'|'SAPHANA'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'VERTICA'|'WORKFLOWS_MWAA'|'AMAZON_Q'|'MLFLOW'|null $connectionType
 * @property list<string>|null $matchCriteria
 * @property array<string, string>|null $connectionProperties
 * @property array<string, string>|null $sparkProperties
 * @property array<string, string>|null $athenaProperties
 * @property array<string, string>|null $pythonProperties
 * @property PhysicalConnectionRequirements|null $physicalConnectionRequirements
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTime
 * @property string|null $lastUpdatedBy
 * @property 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'READY'|'UPDATING'|'UPDATE_FAILED'|'DELETED'|null $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult|null $lastConnectionValidationTime
 * @property AuthenticationConfiguration|null $authenticationConfiguration
 * @property int<1, 2>|null $connectionSchemaVersion
 * @property list<'SPARK'|'ATHENA'|'PYTHON'>|null $compatibleComputeEnvironments
 */
class GlueConnection extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     description?: string|null,
     *     connectionType?: 'ATHENA'|'BIGQUERY'|'DATABRICKS'|'DOCUMENTDB'|'DYNAMODB'|'HYPERPOD'|'IAM'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'S3'|'SAPHANA'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'VERTICA'|'WORKFLOWS_MWAA'|'AMAZON_Q'|'MLFLOW'|null,
     *     matchCriteria?: list<string>|null,
     *     connectionProperties?: array<string, string>|null,
     *     sparkProperties?: array<string, string>|null,
     *     athenaProperties?: array<string, string>|null,
     *     pythonProperties?: array<string, string>|null,
     *     physicalConnectionRequirements?: PhysicalConnectionRequirements|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedBy?: string|null,
     *     status?: 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'READY'|'UPDATING'|'UPDATE_FAILED'|'DELETED'|null,
     *     statusReason?: string|null,
     *     lastConnectionValidationTime?: \Aws\Api\DateTimeResult|null,
     *     authenticationConfiguration?: AuthenticationConfiguration|null,
     *     connectionSchemaVersion?: int<1, 2>|null,
     *     compatibleComputeEnvironments?: list<'SPARK'|'ATHENA'|'PYTHON'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
