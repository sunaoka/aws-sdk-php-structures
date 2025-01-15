<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\CreateSignalingChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelName
 * @property 'SINGLE_MASTER'|'FULL_MESH'|null $ChannelType
 * @property Shapes\SingleMasterConfiguration|null $SingleMasterConfiguration
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateSignalingChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelName: string,
     *     ChannelType?: 'SINGLE_MASTER'|'FULL_MESH'|null,
     *     SingleMasterConfiguration?: Shapes\SingleMasterConfiguration|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
