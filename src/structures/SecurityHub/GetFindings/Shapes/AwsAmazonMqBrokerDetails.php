<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AuthenticationStrategy
 * @property bool $AutoMinorVersionUpgrade
 * @property string $BrokerArn
 * @property string $BrokerName
 * @property string $DeploymentMode
 * @property AwsAmazonMqBrokerEncryptionOptionsDetails $EncryptionOptions
 * @property string $EngineType
 * @property string $EngineVersion
 * @property string $HostInstanceType
 * @property string $BrokerId
 * @property AwsAmazonMqBrokerLdapServerMetadataDetails $LdapServerMetadata
 * @property AwsAmazonMqBrokerLogsDetails $Logs
 * @property AwsAmazonMqBrokerMaintenanceWindowStartTimeDetails $MaintenanceWindowStartTime
 * @property bool $PubliclyAccessible
 * @property list<string> $SecurityGroups
 * @property string $StorageType
 * @property list<string> $SubnetIds
 * @property list<AwsAmazonMqBrokerUsersDetails> $Users
 */
class AwsAmazonMqBrokerDetails extends Shape
{
    /**
     * @param array{
     *     AuthenticationStrategy?: string,
     *     AutoMinorVersionUpgrade?: bool,
     *     BrokerArn?: string,
     *     BrokerName?: string,
     *     DeploymentMode?: string,
     *     EncryptionOptions?: AwsAmazonMqBrokerEncryptionOptionsDetails,
     *     EngineType?: string,
     *     EngineVersion?: string,
     *     HostInstanceType?: string,
     *     BrokerId?: string,
     *     LdapServerMetadata?: AwsAmazonMqBrokerLdapServerMetadataDetails,
     *     Logs?: AwsAmazonMqBrokerLogsDetails,
     *     MaintenanceWindowStartTime?: AwsAmazonMqBrokerMaintenanceWindowStartTimeDetails,
     *     PubliclyAccessible?: bool,
     *     SecurityGroups?: list<string>,
     *     StorageType?: string,
     *     SubnetIds?: list<string>,
     *     Users?: list<AwsAmazonMqBrokerUsersDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
