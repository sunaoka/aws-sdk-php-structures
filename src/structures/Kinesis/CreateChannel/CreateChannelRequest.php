<?php

namespace Sunaoka\Aws\Structures\Kinesis\CreateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelName
 * @property string $ServiceExecutionRoleARN
 * @property list<Shapes\ChannelStreamConfiguration> $StreamConfigurationList
 * @property Shapes\S3DestinationConfiguration|null $S3DestinationConfiguration
 * @property Shapes\S3TablesDestinationConfiguration|null $S3TablesDestinationConfiguration
 * @property Shapes\ChannelEncryptionConfiguration|null $EncryptionConfiguration
 * @property array<string, string>|null $Tags
 * @property Shapes\ChannelLoggingConfiguration|null $LoggingConfiguration
 */
class CreateChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelName: string,
     *     ServiceExecutionRoleARN: string,
     *     StreamConfigurationList: list<Shapes\ChannelStreamConfiguration>,
     *     S3DestinationConfiguration?: Shapes\S3DestinationConfiguration|null,
     *     S3TablesDestinationConfiguration?: Shapes\S3TablesDestinationConfiguration|null,
     *     EncryptionConfiguration?: Shapes\ChannelEncryptionConfiguration|null,
     *     Tags?: array<string, string>|null,
     *     LoggingConfiguration?: Shapes\ChannelLoggingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
