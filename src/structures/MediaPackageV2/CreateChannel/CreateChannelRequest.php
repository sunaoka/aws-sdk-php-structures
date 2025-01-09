<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $ClientToken
 * @property 'HLS'|'CMAF' $InputType
 * @property string $Description
 * @property Shapes\InputSwitchConfiguration $InputSwitchConfiguration
 * @property Shapes\OutputHeaderConfiguration $OutputHeaderConfiguration
 * @property array<string, string> $Tags
 */
class CreateChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ChannelName: string,
     *     ClientToken?: string,
     *     InputType?: 'HLS'|'CMAF',
     *     Description?: string,
     *     InputSwitchConfiguration?: Shapes\InputSwitchConfiguration,
     *     OutputHeaderConfiguration?: Shapes\OutputHeaderConfiguration,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
