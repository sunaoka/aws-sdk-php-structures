<?php

namespace Sunaoka\Aws\Structures\Glue\GetConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property 'JDBC'|'SFTP'|'MONGODB'|'KAFKA'|'NETWORK'|'MARKETPLACE'|'CUSTOM'|'SALESFORCE'|'VIEW_VALIDATION_REDSHIFT'|'VIEW_VALIDATION_ATHENA'|'GOOGLEADS'|'GOOGLESHEETS'|'GOOGLEANALYTICS4'|'SERVICENOW'|'MARKETO'|'SAPODATA'|'ZENDESK'|'JIRACLOUD'|'NETSUITEERP'|'HUBSPOT'|'FACEBOOKADS'|'INSTAGRAMADS'|'ZOHOCRM'|'SALESFORCEPARDOT'|'SALESFORCEMARKETINGCLOUD'|'SLACK'|'STRIPE'|'INTERCOM'|'SNAPCHATADS'|null $ConnectionType
 * @property list<string>|null $MatchCriteria
 * @property array<'HOST'|'PORT'|'USERNAME'|'PASSWORD'|'ENCRYPTED_PASSWORD'|'JDBC_DRIVER_JAR_URI'|'JDBC_DRIVER_CLASS_NAME'|'JDBC_ENGINE'|'JDBC_ENGINE_VERSION'|'CONFIG_FILES'|'INSTANCE_ID'|'JDBC_CONNECTION_URL'|'JDBC_ENFORCE_SSL'|'CUSTOM_JDBC_CERT'|'SKIP_CUSTOM_JDBC_CERT_VALIDATION'|'CUSTOM_JDBC_CERT_STRING'|'CONNECTION_URL'|'KAFKA_BOOTSTRAP_SERVERS'|'KAFKA_SSL_ENABLED'|'KAFKA_CUSTOM_CERT'|'KAFKA_SKIP_CUSTOM_CERT_VALIDATION'|'KAFKA_CLIENT_KEYSTORE'|'KAFKA_CLIENT_KEYSTORE_PASSWORD'|'KAFKA_CLIENT_KEY_PASSWORD'|'ENCRYPTED_KAFKA_CLIENT_KEYSTORE_PASSWORD'|'ENCRYPTED_KAFKA_CLIENT_KEY_PASSWORD'|'KAFKA_SASL_MECHANISM'|'KAFKA_SASL_PLAIN_USERNAME'|'KAFKA_SASL_PLAIN_PASSWORD'|'ENCRYPTED_KAFKA_SASL_PLAIN_PASSWORD'|'KAFKA_SASL_SCRAM_USERNAME'|'KAFKA_SASL_SCRAM_PASSWORD'|'KAFKA_SASL_SCRAM_SECRETS_ARN'|'ENCRYPTED_KAFKA_SASL_SCRAM_PASSWORD'|'KAFKA_SASL_GSSAPI_KEYTAB'|'KAFKA_SASL_GSSAPI_KRB5_CONF'|'KAFKA_SASL_GSSAPI_SERVICE'|'KAFKA_SASL_GSSAPI_PRINCIPAL'|'SECRET_ID'|'CONNECTOR_URL'|'CONNECTOR_TYPE'|'CONNECTOR_CLASS_NAME'|'ENDPOINT'|'ENDPOINT_TYPE'|'ROLE_ARN'|'REGION'|'WORKGROUP_NAME'|'CLUSTER_IDENTIFIER'|'DATABASE', string>|null $ConnectionProperties
 * @property array<string, string>|null $SparkProperties
 * @property array<string, string>|null $AthenaProperties
 * @property array<string, string>|null $PythonProperties
 * @property PhysicalConnectionRequirements|null $PhysicalConnectionRequirements
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $LastUpdatedBy
 * @property 'READY'|'IN_PROGRESS'|'FAILED'|null $Status
 * @property string|null $StatusReason
 * @property \Aws\Api\DateTimeResult|null $LastConnectionValidationTime
 * @property AuthenticationConfiguration|null $AuthenticationConfiguration
 * @property int<1, 2>|null $ConnectionSchemaVersion
 * @property list<'SPARK'|'ATHENA'|'PYTHON'>|null $CompatibleComputeEnvironments
 */
class Connection extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     ConnectionType?: 'JDBC'|'SFTP'|'MONGODB'|'KAFKA'|'NETWORK'|'MARKETPLACE'|'CUSTOM'|'SALESFORCE'|'VIEW_VALIDATION_REDSHIFT'|'VIEW_VALIDATION_ATHENA'|'GOOGLEADS'|'GOOGLESHEETS'|'GOOGLEANALYTICS4'|'SERVICENOW'|'MARKETO'|'SAPODATA'|'ZENDESK'|'JIRACLOUD'|'NETSUITEERP'|'HUBSPOT'|'FACEBOOKADS'|'INSTAGRAMADS'|'ZOHOCRM'|'SALESFORCEPARDOT'|'SALESFORCEMARKETINGCLOUD'|'SLACK'|'STRIPE'|'INTERCOM'|'SNAPCHATADS'|null,
     *     MatchCriteria?: list<string>|null,
     *     ConnectionProperties?: array<'HOST'|'PORT'|'USERNAME'|'PASSWORD'|'ENCRYPTED_PASSWORD'|'JDBC_DRIVER_JAR_URI'|'JDBC_DRIVER_CLASS_NAME'|'JDBC_ENGINE'|'JDBC_ENGINE_VERSION'|'CONFIG_FILES'|'INSTANCE_ID'|'JDBC_CONNECTION_URL'|'JDBC_ENFORCE_SSL'|'CUSTOM_JDBC_CERT'|'SKIP_CUSTOM_JDBC_CERT_VALIDATION'|'CUSTOM_JDBC_CERT_STRING'|'CONNECTION_URL'|'KAFKA_BOOTSTRAP_SERVERS'|'KAFKA_SSL_ENABLED'|'KAFKA_CUSTOM_CERT'|'KAFKA_SKIP_CUSTOM_CERT_VALIDATION'|'KAFKA_CLIENT_KEYSTORE'|'KAFKA_CLIENT_KEYSTORE_PASSWORD'|'KAFKA_CLIENT_KEY_PASSWORD'|'ENCRYPTED_KAFKA_CLIENT_KEYSTORE_PASSWORD'|'ENCRYPTED_KAFKA_CLIENT_KEY_PASSWORD'|'KAFKA_SASL_MECHANISM'|'KAFKA_SASL_PLAIN_USERNAME'|'KAFKA_SASL_PLAIN_PASSWORD'|'ENCRYPTED_KAFKA_SASL_PLAIN_PASSWORD'|'KAFKA_SASL_SCRAM_USERNAME'|'KAFKA_SASL_SCRAM_PASSWORD'|'KAFKA_SASL_SCRAM_SECRETS_ARN'|'ENCRYPTED_KAFKA_SASL_SCRAM_PASSWORD'|'KAFKA_SASL_GSSAPI_KEYTAB'|'KAFKA_SASL_GSSAPI_KRB5_CONF'|'KAFKA_SASL_GSSAPI_SERVICE'|'KAFKA_SASL_GSSAPI_PRINCIPAL'|'SECRET_ID'|'CONNECTOR_URL'|'CONNECTOR_TYPE'|'CONNECTOR_CLASS_NAME'|'ENDPOINT'|'ENDPOINT_TYPE'|'ROLE_ARN'|'REGION'|'WORKGROUP_NAME'|'CLUSTER_IDENTIFIER'|'DATABASE', string>|null,
     *     SparkProperties?: array<string, string>|null,
     *     AthenaProperties?: array<string, string>|null,
     *     PythonProperties?: array<string, string>|null,
     *     PhysicalConnectionRequirements?: PhysicalConnectionRequirements|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedBy?: string|null,
     *     Status?: 'READY'|'IN_PROGRESS'|'FAILED'|null,
     *     StatusReason?: string|null,
     *     LastConnectionValidationTime?: \Aws\Api\DateTimeResult|null,
     *     AuthenticationConfiguration?: AuthenticationConfiguration|null,
     *     ConnectionSchemaVersion?: int<1, 2>|null,
     *     CompatibleComputeEnvironments?: list<'SPARK'|'ATHENA'|'PYTHON'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
