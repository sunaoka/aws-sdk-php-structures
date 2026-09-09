<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string|null $ClientToken
 * @property 'HLS'|'CMAF'|'MULTIVIEW'|null $InputType
 * @property string|null $Description
 * @property Shapes\InputSwitchConfiguration|null $InputSwitchConfiguration
 * @property Shapes\OutputHeaderConfiguration|null $OutputHeaderConfiguration
 * @property Shapes\MultiviewConfiguration|null $MultiviewConfiguration
 * @property 'EPOCH_LOCKED'|'NON_EPOCH_LOCKED'|null $OutputLockingMode
 * @property array<string, string>|null $Tags
 */
class CreateChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ChannelName: string,
     *     ClientToken?: string|null,
     *     InputType?: 'HLS'|'CMAF'|'MULTIVIEW'|null,
     *     Description?: string|null,
     *     InputSwitchConfiguration?: Shapes\InputSwitchConfiguration|null,
     *     OutputHeaderConfiguration?: Shapes\OutputHeaderConfiguration|null,
     *     MultiviewConfiguration?: Shapes\MultiviewConfiguration|null,
     *     OutputLockingMode?: 'EPOCH_LOCKED'|'NON_EPOCH_LOCKED'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
