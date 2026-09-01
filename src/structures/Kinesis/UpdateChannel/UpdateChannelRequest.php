<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelARN
 * @property Shapes\S3DestinationUpdateInput|null $S3DestinationConfiguration
 * @property Shapes\S3TablesDestinationUpdateInput|null $S3TablesDestinationConfiguration
 * @property Shapes\ChannelLoggingUpdateInput|null $LoggingConfiguration
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelARN: string,
     *     S3DestinationConfiguration?: Shapes\S3DestinationUpdateInput|null,
     *     S3TablesDestinationConfiguration?: Shapes\S3TablesDestinationUpdateInput|null,
     *     LoggingConfiguration?: Shapes\ChannelLoggingUpdateInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
