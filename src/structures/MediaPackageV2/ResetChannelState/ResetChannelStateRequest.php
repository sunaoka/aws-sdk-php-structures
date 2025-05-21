<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ResetChannelState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 */
class ResetChannelStateRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ChannelName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
