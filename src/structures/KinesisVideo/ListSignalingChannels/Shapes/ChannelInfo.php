<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListSignalingChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChannelName
 * @property string|null $ChannelARN
 * @property 'SINGLE_MASTER'|'FULL_MESH'|null $ChannelType
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|null $ChannelStatus
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property SingleMasterConfiguration|null $SingleMasterConfiguration
 * @property string|null $Version
 */
class ChannelInfo extends Shape
{
    /**
     * @param array{
     *     ChannelName?: string|null,
     *     ChannelARN?: string|null,
     *     ChannelType?: 'SINGLE_MASTER'|'FULL_MESH'|null,
     *     ChannelStatus?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     SingleMasterConfiguration?: SingleMasterConfiguration|null,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
