<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelMessages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 * @property \Aws\Api\DateTimeResult $NotBefore
 * @property \Aws\Api\DateTimeResult $NotAfter
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $ChimeBearer
 * @property string $SubChannelId
 */
class ListChannelMessagesRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     SortOrder?: 'ASCENDING'|'DESCENDING',
     *     NotBefore?: \Aws\Api\DateTimeResult,
     *     NotAfter?: \Aws\Api\DateTimeResult,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ChimeBearer: string,
     *     SubChannelId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
