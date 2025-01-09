<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateChannelGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string $ClientToken
 * @property string $Description
 * @property array<string, string> $Tags
 */
class CreateChannelGroupRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ClientToken?: string,
     *     Description?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
