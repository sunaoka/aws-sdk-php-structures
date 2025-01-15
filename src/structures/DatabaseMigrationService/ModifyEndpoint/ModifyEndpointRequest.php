<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointArn
 * @property string|null $EndpointIdentifier
 * @property 'source'|'target'|null $EndpointType
 * @property string|null $EngineName
 * @property string|null $Username
 * @property string|null $Password
 * @property string|null $ServerName
 * @property int|null $Port
 * @property string|null $DatabaseName
 * @property string|null $ExtraConnectionAttributes
 * @property string|null $CertificateArn
 * @property 'none'|'require'|'verify-ca'|'verify-full'|null $SslMode
 * @property string|null $ServiceAccessRoleArn
 * @property string|null $ExternalTableDefinition
 * @property Shapes\DynamoDbSettings|null $DynamoDbSettings
 * @property Shapes\S3Settings|null $S3Settings
 * @property Shapes\DmsTransferSettings|null $DmsTransferSettings
 * @property Shapes\MongoDbSettings|null $MongoDbSettings
 * @property Shapes\KinesisSettings|null $KinesisSettings
 * @property Shapes\KafkaSettings|null $KafkaSettings
 * @property Shapes\ElasticsearchSettings|null $ElasticsearchSettings
 * @property Shapes\NeptuneSettings|null $NeptuneSettings
 * @property Shapes\RedshiftSettings|null $RedshiftSettings
 * @property Shapes\PostgreSQLSettings|null $PostgreSQLSettings
 * @property Shapes\MySQLSettings|null $MySQLSettings
 * @property Shapes\OracleSettings|null $OracleSettings
 * @property Shapes\SybaseSettings|null $SybaseSettings
 * @property Shapes\MicrosoftSQLServerSettings|null $MicrosoftSQLServerSettings
 * @property Shapes\IBMDb2Settings|null $IBMDb2Settings
 * @property Shapes\DocDbSettings|null $DocDbSettings
 * @property Shapes\RedisSettings|null $RedisSettings
 * @property bool|null $ExactSettings
 * @property Shapes\GcpMySQLSettings|null $GcpMySQLSettings
 * @property Shapes\TimestreamSettings|null $TimestreamSettings
 */
class ModifyEndpointRequest extends Request
{
    /**
     * @param array{
     *     EndpointArn: string,
     *     EndpointIdentifier?: string|null,
     *     EndpointType?: 'source'|'target'|null,
     *     EngineName?: string|null,
     *     Username?: string|null,
     *     Password?: string|null,
     *     ServerName?: string|null,
     *     Port?: int|null,
     *     DatabaseName?: string|null,
     *     ExtraConnectionAttributes?: string|null,
     *     CertificateArn?: string|null,
     *     SslMode?: 'none'|'require'|'verify-ca'|'verify-full'|null,
     *     ServiceAccessRoleArn?: string|null,
     *     ExternalTableDefinition?: string|null,
     *     DynamoDbSettings?: Shapes\DynamoDbSettings|null,
     *     S3Settings?: Shapes\S3Settings|null,
     *     DmsTransferSettings?: Shapes\DmsTransferSettings|null,
     *     MongoDbSettings?: Shapes\MongoDbSettings|null,
     *     KinesisSettings?: Shapes\KinesisSettings|null,
     *     KafkaSettings?: Shapes\KafkaSettings|null,
     *     ElasticsearchSettings?: Shapes\ElasticsearchSettings|null,
     *     NeptuneSettings?: Shapes\NeptuneSettings|null,
     *     RedshiftSettings?: Shapes\RedshiftSettings|null,
     *     PostgreSQLSettings?: Shapes\PostgreSQLSettings|null,
     *     MySQLSettings?: Shapes\MySQLSettings|null,
     *     OracleSettings?: Shapes\OracleSettings|null,
     *     SybaseSettings?: Shapes\SybaseSettings|null,
     *     MicrosoftSQLServerSettings?: Shapes\MicrosoftSQLServerSettings|null,
     *     IBMDb2Settings?: Shapes\IBMDb2Settings|null,
     *     DocDbSettings?: Shapes\DocDbSettings|null,
     *     RedisSettings?: Shapes\RedisSettings|null,
     *     ExactSettings?: bool|null,
     *     GcpMySQLSettings?: Shapes\GcpMySQLSettings|null,
     *     TimestreamSettings?: Shapes\TimestreamSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
