<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateChannelGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 */
class CreateChannelGroupRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
