<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AuthenticationStrategy
 * @property bool|null $AutoMinorVersionUpgrade
 * @property string|null $BrokerArn
 * @property string|null $BrokerName
 * @property string|null $DeploymentMode
 * @property AwsAmazonMqBrokerEncryptionOptionsDetails|null $EncryptionOptions
 * @property string|null $EngineType
 * @property string|null $EngineVersion
 * @property string|null $HostInstanceType
 * @property string|null $BrokerId
 * @property AwsAmazonMqBrokerLdapServerMetadataDetails|null $LdapServerMetadata
 * @property AwsAmazonMqBrokerLogsDetails|null $Logs
 * @property AwsAmazonMqBrokerMaintenanceWindowStartTimeDetails|null $MaintenanceWindowStartTime
 * @property bool|null $PubliclyAccessible
 * @property list<string>|null $SecurityGroups
 * @property string|null $StorageType
 * @property list<string>|null $SubnetIds
 * @property list<AwsAmazonMqBrokerUsersDetails>|null $Users
 */
class AwsAmazonMqBrokerDetails extends Shape
{
    /**
     * @param array{
     *     AuthenticationStrategy?: string|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     BrokerArn?: string|null,
     *     BrokerName?: string|null,
     *     DeploymentMode?: string|null,
     *     EncryptionOptions?: AwsAmazonMqBrokerEncryptionOptionsDetails|null,
     *     EngineType?: string|null,
     *     EngineVersion?: string|null,
     *     HostInstanceType?: string|null,
     *     BrokerId?: string|null,
     *     LdapServerMetadata?: AwsAmazonMqBrokerLdapServerMetadataDetails|null,
     *     Logs?: AwsAmazonMqBrokerLogsDetails|null,
     *     MaintenanceWindowStartTime?: AwsAmazonMqBrokerMaintenanceWindowStartTimeDetails|null,
     *     PubliclyAccessible?: bool|null,
     *     SecurityGroups?: list<string>|null,
     *     StorageType?: string|null,
     *     SubnetIds?: list<string>|null,
     *     Users?: list<AwsAmazonMqBrokerUsersDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
