<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property 'PUBLIC'|'PRIVATE'|null $Privacy
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 * @property string $ChimeBearer
 */
class ListChannelsRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceArn: string,
     *     Privacy?: 'PUBLIC'|'PRIVATE'|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null,
     *     ChimeBearer: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
