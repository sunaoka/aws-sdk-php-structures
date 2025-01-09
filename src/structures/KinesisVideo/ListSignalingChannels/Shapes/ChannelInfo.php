<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListSignalingChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelName
 * @property string $ChannelARN
 * @property 'SINGLE_MASTER'|'FULL_MESH' $ChannelType
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING' $ChannelStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property SingleMasterConfiguration $SingleMasterConfiguration
 * @property string $Version
 */
class ChannelInfo extends Shape
{
    /**
     * @param array{
     *     ChannelName?: string,
     *     ChannelARN?: string,
     *     ChannelType?: 'SINGLE_MASTER'|'FULL_MESH',
     *     ChannelStatus?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     SingleMasterConfiguration?: SingleMasterConfiguration,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
