<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateChannelGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string $ETag
 * @property string $Description
 */
class UpdateChannelGroupRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ETag?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
