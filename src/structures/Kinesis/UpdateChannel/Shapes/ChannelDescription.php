<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelName
 * @property string $ChannelARN
 * @property string $ChannelId
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED' $ChannelStatus
 * @property string|null $ChannelStatusReason
 * @property \Aws\Api\DateTimeResult $ChannelCreationTimestamp
 * @property string $ServiceExecutionRoleARN
 * @property list<ChannelStreamDescription> $StreamConfigurationList
 * @property S3DestinationDescription|null $S3DestinationConfiguration
 * @property S3TablesDestinationDescription|null $S3TablesDestinationConfiguration
 * @property ChannelEncryptionConfiguration|null $EncryptionConfiguration
 * @property ChannelLoggingConfiguration $LoggingConfiguration
 */
class ChannelDescription extends Shape
{
    /**
     * @param array{
     *     ChannelName: string,
     *     ChannelARN: string,
     *     ChannelId: string,
     *     ChannelStatus: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED',
     *     ChannelStatusReason?: string|null,
     *     ChannelCreationTimestamp: \Aws\Api\DateTimeResult,
     *     ServiceExecutionRoleARN: string,
     *     StreamConfigurationList: list<ChannelStreamDescription>,
     *     S3DestinationConfiguration?: S3DestinationDescription|null,
     *     S3TablesDestinationConfiguration?: S3TablesDestinationDescription|null,
     *     EncryptionConfiguration?: ChannelEncryptionConfiguration|null,
     *     LoggingConfiguration: ChannelLoggingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
