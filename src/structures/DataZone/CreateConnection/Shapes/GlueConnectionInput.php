<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $athenaProperties
 * @property AuthenticationConfigurationInput|null $authenticationConfiguration
 * @property array<string, string>|null $connectionProperties
 * @property 'SNOWFLAKE'|'BIGQUERY'|'DOCUMENTDB'|'DYNAMODB'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'SAPHANA'|'SQLSERVER'|'TERADATA'|'VERTICA'|null $connectionType
 * @property string|null $description
 * @property string|null $matchCriteria
 * @property string|null $name
 * @property PhysicalConnectionRequirements|null $physicalConnectionRequirements
 * @property array<string, string>|null $pythonProperties
 * @property array<string, string>|null $sparkProperties
 * @property bool|null $validateCredentials
 * @property list<'SPARK'|'ATHENA'|'PYTHON'>|null $validateForComputeEnvironments
 */
class GlueConnectionInput extends Shape
{
    /**
     * @param array{
     *     athenaProperties?: array<string, string>|null,
     *     authenticationConfiguration?: AuthenticationConfigurationInput|null,
     *     connectionProperties?: array<string, string>|null,
     *     connectionType?: 'SNOWFLAKE'|'BIGQUERY'|'DOCUMENTDB'|'DYNAMODB'|'MYSQL'|'OPENSEARCH'|'ORACLE'|'POSTGRESQL'|'REDSHIFT'|'SAPHANA'|'SQLSERVER'|'TERADATA'|'VERTICA'|null,
     *     description?: string|null,
     *     matchCriteria?: string|null,
     *     name?: string|null,
     *     physicalConnectionRequirements?: PhysicalConnectionRequirements|null,
     *     pythonProperties?: array<string, string>|null,
     *     sparkProperties?: array<string, string>|null,
     *     validateCredentials?: bool|null,
     *     validateForComputeEnvironments?: list<'SPARK'|'ATHENA'|'PYTHON'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
