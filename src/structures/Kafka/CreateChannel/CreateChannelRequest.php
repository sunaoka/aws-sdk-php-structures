<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelName
 * @property string $ClusterArn
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property Shapes\IcebergDestinationConfiguration|null $IcebergDestinationConfiguration
 * @property Shapes\ChannelLoggingInfo|null $LoggingInfo
 * @property Shapes\S3DestinationConfiguration|null $S3DestinationConfiguration
 * @property array<string, string>|null $Tags
 * @property list<Shapes\TopicConfiguration> $TopicConfigurationList
 */
class CreateChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelName: string,
     *     ClusterArn: string,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     IcebergDestinationConfiguration?: Shapes\IcebergDestinationConfiguration|null,
     *     LoggingInfo?: Shapes\ChannelLoggingInfo|null,
     *     S3DestinationConfiguration?: Shapes\S3DestinationConfiguration|null,
     *     Tags?: array<string, string>|null,
     *     TopicConfigurationList: list<Shapes\TopicConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
