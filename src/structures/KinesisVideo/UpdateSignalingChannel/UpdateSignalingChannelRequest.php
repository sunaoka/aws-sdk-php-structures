<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateSignalingChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelARN
 * @property string $CurrentVersion
 * @property Shapes\SingleMasterConfiguration|null $SingleMasterConfiguration
 */
class UpdateSignalingChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelARN: string,
     *     CurrentVersion: string,
     *     SingleMasterConfiguration?: Shapes\SingleMasterConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
