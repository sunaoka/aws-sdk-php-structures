<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $ETag
 * @property string $Description
 * @property Shapes\InputSwitchConfiguration $InputSwitchConfiguration
 * @property Shapes\OutputHeaderConfiguration $OutputHeaderConfiguration
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ChannelName: string,
     *     ETag?: string,
     *     Description?: string,
     *     InputSwitchConfiguration?: Shapes\InputSwitchConfiguration,
     *     OutputHeaderConfiguration?: Shapes\OutputHeaderConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
