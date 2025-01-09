<?php

namespace Sunaoka\Aws\Structures\Glue\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property 'JDBC'|'SFTP'|'MONGODB'|'KAFKA'|'NETWORK'|'MARKETPLACE'|'CUSTOM'|'SALESFORCE'|'VIEW_VALIDATION_REDSHIFT'|'VIEW_VALIDATION_ATHENA'|'GOOGLEADS'|'GOOGLESHEETS'|'GOOGLEANALYTICS4'|'SERVICENOW'|'MARKETO'|'SAPODATA'|'ZENDESK'|'JIRACLOUD'|'NETSUITEERP'|'HUBSPOT'|'FACEBOOKADS'|'INSTAGRAMADS'|'ZOHOCRM'|'SALESFORCEPARDOT'|'SALESFORCEMARKETINGCLOUD'|'SLACK'|'STRIPE'|'INTERCOM'|'SNAPCHATADS' $ConnectionType
 * @property list<string> $MatchCriteria
 * @property array<'HOST'|'PORT'|'USERNAME'|'PASSWORD'|'ENCRYPTED_PASSWORD'|'JDBC_DRIVER_JAR_URI'|'JDBC_DRIVER_CLASS_NAME'|'JDBC_ENGINE'|'JDBC_ENGINE_VERSION'|'CONFIG_FILES'|'INSTANCE_ID'|'JDBC_CONNECTION_URL'|'JDBC_ENFORCE_SSL'|'CUSTOM_JDBC_CERT'|'SKIP_CUSTOM_JDBC_CERT_VALIDATION'|'CUSTOM_JDBC_CERT_STRING'|'CONNECTION_URL'|'KAFKA_BOOTSTRAP_SERVERS'|'KAFKA_SSL_ENABLED'|'KAFKA_CUSTOM_CERT'|'KAFKA_SKIP_CUSTOM_CERT_VALIDATION'|'KAFKA_CLIENT_KEYSTORE'|'KAFKA_CLIENT_KEYSTORE_PASSWORD'|'KAFKA_CLIENT_KEY_PASSWORD'|'ENCRYPTED_KAFKA_CLIENT_KEYSTORE_PASSWORD'|'ENCRYPTED_KAFKA_CLIENT_KEY_PASSWORD'|'KAFKA_SASL_MECHANISM'|'KAFKA_SASL_PLAIN_USERNAME'|'KAFKA_SASL_PLAIN_PASSWORD'|'ENCRYPTED_KAFKA_SASL_PLAIN_PASSWORD'|'KAFKA_SASL_SCRAM_USERNAME'|'KAFKA_SASL_SCRAM_PASSWORD'|'KAFKA_SASL_SCRAM_SECRETS_ARN'|'ENCRYPTED_KAFKA_SASL_SCRAM_PASSWORD'|'KAFKA_SASL_GSSAPI_KEYTAB'|'KAFKA_SASL_GSSAPI_KRB5_CONF'|'KAFKA_SASL_GSSAPI_SERVICE'|'KAFKA_SASL_GSSAPI_PRINCIPAL'|'SECRET_ID'|'CONNECTOR_URL'|'CONNECTOR_TYPE'|'CONNECTOR_CLASS_NAME'|'ENDPOINT'|'ENDPOINT_TYPE'|'ROLE_ARN'|'REGION'|'WORKGROUP_NAME'|'CLUSTER_IDENTIFIER'|'DATABASE', string> $ConnectionProperties
 * @property array<string, string> $SparkProperties
 * @property array<string, string> $AthenaProperties
 * @property array<string, string> $PythonProperties
 * @property PhysicalConnectionRequirements $PhysicalConnectionRequirements
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $LastUpdatedBy
 * @property 'READY'|'IN_PROGRESS'|'FAILED' $Status
 * @property string $StatusReason
 * @property \Aws\Api\DateTimeResult $LastConnectionValidationTime
 * @property AuthenticationConfiguration $AuthenticationConfiguration
 * @property int<1, 2> $ConnectionSchemaVersion
 * @property list<'SPARK'|'ATHENA'|'PYTHON'> $CompatibleComputeEnvironments
 */
class Connection extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     ConnectionType?: 'JDBC'|'SFTP'|'MONGODB'|'KAFKA'|'NETWORK'|'MARKETPLACE'|'CUSTOM'|'SALESFORCE'|'VIEW_VALIDATION_REDSHIFT'|'VIEW_VALIDATION_ATHENA'|'GOOGLEADS'|'GOOGLESHEETS'|'GOOGLEANALYTICS4'|'SERVICENOW'|'MARKETO'|'SAPODATA'|'ZENDESK'|'JIRACLOUD'|'NETSUITEERP'|'HUBSPOT'|'FACEBOOKADS'|'INSTAGRAMADS'|'ZOHOCRM'|'SALESFORCEPARDOT'|'SALESFORCEMARKETINGCLOUD'|'SLACK'|'STRIPE'|'INTERCOM'|'SNAPCHATADS',
     *     MatchCriteria?: list<string>,
     *     ConnectionProperties?: array<'HOST'|'PORT'|'USERNAME'|'PASSWORD'|'ENCRYPTED_PASSWORD'|'JDBC_DRIVER_JAR_URI'|'JDBC_DRIVER_CLASS_NAME'|'JDBC_ENGINE'|'JDBC_ENGINE_VERSION'|'CONFIG_FILES'|'INSTANCE_ID'|'JDBC_CONNECTION_URL'|'JDBC_ENFORCE_SSL'|'CUSTOM_JDBC_CERT'|'SKIP_CUSTOM_JDBC_CERT_VALIDATION'|'CUSTOM_JDBC_CERT_STRING'|'CONNECTION_URL'|'KAFKA_BOOTSTRAP_SERVERS'|'KAFKA_SSL_ENABLED'|'KAFKA_CUSTOM_CERT'|'KAFKA_SKIP_CUSTOM_CERT_VALIDATION'|'KAFKA_CLIENT_KEYSTORE'|'KAFKA_CLIENT_KEYSTORE_PASSWORD'|'KAFKA_CLIENT_KEY_PASSWORD'|'ENCRYPTED_KAFKA_CLIENT_KEYSTORE_PASSWORD'|'ENCRYPTED_KAFKA_CLIENT_KEY_PASSWORD'|'KAFKA_SASL_MECHANISM'|'KAFKA_SASL_PLAIN_USERNAME'|'KAFKA_SASL_PLAIN_PASSWORD'|'ENCRYPTED_KAFKA_SASL_PLAIN_PASSWORD'|'KAFKA_SASL_SCRAM_USERNAME'|'KAFKA_SASL_SCRAM_PASSWORD'|'KAFKA_SASL_SCRAM_SECRETS_ARN'|'ENCRYPTED_KAFKA_SASL_SCRAM_PASSWORD'|'KAFKA_SASL_GSSAPI_KEYTAB'|'KAFKA_SASL_GSSAPI_KRB5_CONF'|'KAFKA_SASL_GSSAPI_SERVICE'|'KAFKA_SASL_GSSAPI_PRINCIPAL'|'SECRET_ID'|'CONNECTOR_URL'|'CONNECTOR_TYPE'|'CONNECTOR_CLASS_NAME'|'ENDPOINT'|'ENDPOINT_TYPE'|'ROLE_ARN'|'REGION'|'WORKGROUP_NAME'|'CLUSTER_IDENTIFIER'|'DATABASE', string>,
     *     SparkProperties?: array<string, string>,
     *     AthenaProperties?: array<string, string>,
     *     PythonProperties?: array<string, string>,
     *     PhysicalConnectionRequirements?: PhysicalConnectionRequirements,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedBy?: string,
     *     Status?: 'READY'|'IN_PROGRESS'|'FAILED',
     *     StatusReason?: string,
     *     LastConnectionValidationTime?: \Aws\Api\DateTimeResult,
     *     AuthenticationConfiguration?: AuthenticationConfiguration,
     *     ConnectionSchemaVersion?: int<1, 2>,
     *     CompatibleComputeEnvironments?: list<'SPARK'|'ATHENA'|'PYTHON'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
