<?php

namespace Sunaoka\Aws\Structures\DataZone\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $athenaProperties
 * @property AuthenticationConfiguration|null $authenticationConfiguration
 * @property list<'SPARK'|'ATHENA'|'PYTHON'>|null $compatibleComputeEnvironments
 * @property array<string, string>|null $connectionProperties
 * @property int<1, 2>|null $connectionSchemaVersion
 * @property 'ATHENA'|'BIGQUERY'|'DATABRICKS'|'DOCUMENTDB'|'DYNAMODB'|'HYPERPOD'|'IAM'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'SAPHANA'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'VERTICA'|'WORKFLOWS_MWAA'|null $connectionType
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $lastConnectionValidationTime
 * @property string|null $lastUpdatedBy
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTime
 * @property list<string>|null $matchCriteria
 * @property string|null $name
 * @property PhysicalConnectionRequirements|null $physicalConnectionRequirements
 * @property array<string, string>|null $pythonProperties
 * @property array<string, string>|null $sparkProperties
 * @property 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'READY'|'UPDATING'|'UPDATE_FAILED'|'DELETED'|null $status
 * @property string|null $statusReason
 */
class GlueConnection extends Shape
{
    /**
     * @param array{
     *     athenaProperties?: array<string, string>|null,
     *     authenticationConfiguration?: AuthenticationConfiguration|null,
     *     compatibleComputeEnvironments?: list<'SPARK'|'ATHENA'|'PYTHON'>|null,
     *     connectionProperties?: array<string, string>|null,
     *     connectionSchemaVersion?: int<1, 2>|null,
     *     connectionType?: 'ATHENA'|'BIGQUERY'|'DATABRICKS'|'DOCUMENTDB'|'DYNAMODB'|'HYPERPOD'|'IAM'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'SAPHANA'|'SNOWFLAKE'|'SPARK'|'SQLSERVER'|'TERADATA'|'VERTICA'|'WORKFLOWS_MWAA'|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     lastConnectionValidationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedBy?: string|null,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     matchCriteria?: list<string>|null,
     *     name?: string|null,
     *     physicalConnectionRequirements?: PhysicalConnectionRequirements|null,
     *     pythonProperties?: array<string, string>|null,
     *     sparkProperties?: array<string, string>|null,
     *     status?: 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'READY'|'UPDATING'|'UPDATE_FAILED'|'DELETED'|null,
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
