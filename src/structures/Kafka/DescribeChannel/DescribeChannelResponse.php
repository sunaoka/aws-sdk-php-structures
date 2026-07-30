<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeChannel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ChannelArn
 * @property string $ChannelName
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property Shapes\IcebergDestinationConfiguration|null $IcebergDestinationConfiguration
 * @property Shapes\S3DestinationConfiguration|null $S3DestinationConfiguration
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED'|'SUSPENDING'|'SUSPENDED' $Status
 * @property 'ICEBERG'|'S3' $DestinationType
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<Shapes\TopicConfiguration> $TopicConfigurationList
 * @property Shapes\ChannelLoggingInfo|null $LoggingInfo
 * @property Shapes\ChannelStateInfo|null $StateInfo
 * @property string|null $ClusterOperationArn
 * @property array<string, string>|null $Tags
 */
class DescribeChannelResponse extends Response
{
}
