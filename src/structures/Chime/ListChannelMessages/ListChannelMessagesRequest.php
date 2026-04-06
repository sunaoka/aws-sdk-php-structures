<?php

namespace Sunaoka\Aws\Structures\Chime\ListChannelMessages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 * @property \Aws\Api\DateTimeResult|null $NotBefore
 * @property \Aws\Api\DateTimeResult|null $NotAfter
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $ChimeBearer
 */
class ListChannelMessagesRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     NotBefore?: \Aws\Api\DateTimeResult|null,
     *     NotAfter?: \Aws\Api\DateTimeResult|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null,
     *     ChimeBearer?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
