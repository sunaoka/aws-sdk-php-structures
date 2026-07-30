<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $ClusterArn
 * @property Shapes\IcebergDestinationUpdate|null $IcebergDestinationUpdate
 * @property Shapes\S3DestinationUpdate|null $S3DestinationUpdate
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     ClusterArn: string,
     *     IcebergDestinationUpdate?: Shapes\IcebergDestinationUpdate|null,
     *     S3DestinationUpdate?: Shapes\S3DestinationUpdate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
