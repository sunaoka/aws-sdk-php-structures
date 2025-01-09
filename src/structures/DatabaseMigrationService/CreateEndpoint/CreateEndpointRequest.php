<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointIdentifier
 * @property 'source'|'target' $EndpointType
 * @property string $EngineName
 * @property string $Username
 * @property string $Password
 * @property string $ServerName
 * @property int $Port
 * @property string $DatabaseName
 * @property string $ExtraConnectionAttributes
 * @property string $KmsKeyId
 * @property list<Shapes\Tag> $Tags
 * @property string $CertificateArn
 * @property 'none'|'require'|'verify-ca'|'verify-full' $SslMode
 * @property string $ServiceAccessRoleArn
 * @property string $ExternalTableDefinition
 * @property Shapes\DynamoDbSettings $DynamoDbSettings
 * @property Shapes\S3Settings $S3Settings
 * @property Shapes\DmsTransferSettings $DmsTransferSettings
 * @property Shapes\MongoDbSettings $MongoDbSettings
 * @property Shapes\KinesisSettings $KinesisSettings
 * @property Shapes\KafkaSettings $KafkaSettings
 * @property Shapes\ElasticsearchSettings $ElasticsearchSettings
 * @property Shapes\NeptuneSettings $NeptuneSettings
 * @property Shapes\RedshiftSettings $RedshiftSettings
 * @property Shapes\PostgreSQLSettings $PostgreSQLSettings
 * @property Shapes\MySQLSettings $MySQLSettings
 * @property Shapes\OracleSettings $OracleSettings
 * @property Shapes\SybaseSettings $SybaseSettings
 * @property Shapes\MicrosoftSQLServerSettings $MicrosoftSQLServerSettings
 * @property Shapes\IBMDb2Settings $IBMDb2Settings
 * @property string $ResourceIdentifier
 * @property Shapes\DocDbSettings $DocDbSettings
 * @property Shapes\RedisSettings $RedisSettings
 * @property Shapes\GcpMySQLSettings $GcpMySQLSettings
 * @property Shapes\TimestreamSettings $TimestreamSettings
 */
class CreateEndpointRequest extends Request
{
    /**
     * @param array{
     *     EndpointIdentifier: string,
     *     EndpointType: 'source'|'target',
     *     EngineName: string,
     *     Username?: string,
     *     Password?: string,
     *     ServerName?: string,
     *     Port?: int,
     *     DatabaseName?: string,
     *     ExtraConnectionAttributes?: string,
     *     KmsKeyId?: string,
     *     Tags?: list<Shapes\Tag>,
     *     CertificateArn?: string,
     *     SslMode?: 'none'|'require'|'verify-ca'|'verify-full',
     *     ServiceAccessRoleArn?: string,
     *     ExternalTableDefinition?: string,
     *     DynamoDbSettings?: Shapes\DynamoDbSettings,
     *     S3Settings?: Shapes\S3Settings,
     *     DmsTransferSettings?: Shapes\DmsTransferSettings,
     *     MongoDbSettings?: Shapes\MongoDbSettings,
     *     KinesisSettings?: Shapes\KinesisSettings,
     *     KafkaSettings?: Shapes\KafkaSettings,
     *     ElasticsearchSettings?: Shapes\ElasticsearchSettings,
     *     NeptuneSettings?: Shapes\NeptuneSettings,
     *     RedshiftSettings?: Shapes\RedshiftSettings,
     *     PostgreSQLSettings?: Shapes\PostgreSQLSettings,
     *     MySQLSettings?: Shapes\MySQLSettings,
     *     OracleSettings?: Shapes\OracleSettings,
     *     SybaseSettings?: Shapes\SybaseSettings,
     *     MicrosoftSQLServerSettings?: Shapes\MicrosoftSQLServerSettings,
     *     IBMDb2Settings?: Shapes\IBMDb2Settings,
     *     ResourceIdentifier?: string,
     *     DocDbSettings?: Shapes\DocDbSettings,
     *     RedisSettings?: Shapes\RedisSettings,
     *     GcpMySQLSettings?: Shapes\GcpMySQLSettings,
     *     TimestreamSettings?: Shapes\TimestreamSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
