<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property 'PUBLIC'|'PRIVATE' $Privacy
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 * @property string $ChimeBearer
 */
class ListChannelsRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceArn: string,
     *     Privacy?: 'PUBLIC'|'PRIVATE',
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string,
     *     ChimeBearer: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
