<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateChannelGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string|null $ETag
 * @property string|null $Description
 */
class UpdateChannelGroupRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ETag?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
