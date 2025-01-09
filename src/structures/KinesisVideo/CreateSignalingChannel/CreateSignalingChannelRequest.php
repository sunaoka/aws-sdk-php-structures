<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\CreateSignalingChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelName
 * @property 'SINGLE_MASTER'|'FULL_MESH' $ChannelType
 * @property Shapes\SingleMasterConfiguration $SingleMasterConfiguration
 * @property list<Shapes\Tag> $Tags
 */
class CreateSignalingChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelName: string,
     *     ChannelType?: 'SINGLE_MASTER'|'FULL_MESH',
     *     SingleMasterConfiguration?: Shapes\SingleMasterConfiguration,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
