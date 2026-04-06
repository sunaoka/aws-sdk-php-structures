<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateChannelGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string|null $Description
 */
class UpdateChannelGroupRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
