<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $connectionProperties
 * @property PhysicalConnectionRequirements|null $physicalConnectionRequirements
 * @property string|null $name
 * @property string|null $description
 * @property 'SNOWFLAKE'|'BIGQUERY'|'DOCUMENTDB'|'DYNAMODB'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'SAPHANA'|'SQLSERVER'|'TERADATA'|'VERTICA'|null $connectionType
 * @property string|null $matchCriteria
 * @property bool|null $validateCredentials
 * @property list<'SPARK'|'ATHENA'|'PYTHON'>|null $validateForComputeEnvironments
 * @property array<string, string>|null $sparkProperties
 * @property array<string, string>|null $athenaProperties
 * @property array<string, string>|null $pythonProperties
 * @property AuthenticationConfigurationInput|null $authenticationConfiguration
 */
class GlueConnectionInput extends Shape
{
    /**
     * @param array{
     *     connectionProperties?: array<string, string>|null,
     *     physicalConnectionRequirements?: PhysicalConnectionRequirements|null,
     *     name?: string|null,
     *     description?: string|null,
     *     connectionType?: 'SNOWFLAKE'|'BIGQUERY'|'DOCUMENTDB'|'DYNAMODB'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'SAPHANA'|'SQLSERVER'|'TERADATA'|'VERTICA'|null,
     *     matchCriteria?: string|null,
     *     validateCredentials?: bool|null,
     *     validateForComputeEnvironments?: list<'SPARK'|'ATHENA'|'PYTHON'>|null,
     *     sparkProperties?: array<string, string>|null,
     *     athenaProperties?: array<string, string>|null,
     *     pythonProperties?: array<string, string>|null,
     *     authenticationConfiguration?: AuthenticationConfigurationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
