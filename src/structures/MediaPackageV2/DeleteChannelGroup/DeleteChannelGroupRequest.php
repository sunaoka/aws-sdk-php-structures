<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\DeleteChannelGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 */
class DeleteChannelGroupRequest extends Request
{
    /**
     * @param array{ChannelGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
