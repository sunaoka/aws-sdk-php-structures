<?php

namespace Sunaoka\Aws\Structures\Chime\ListChannelMessages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 * @property \Aws\Api\DateTimeResult $NotBefore
 * @property \Aws\Api\DateTimeResult $NotAfter
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 * @property string $ChimeBearer
 */
class ListChannelMessagesRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     SortOrder?: 'ASCENDING'|'DESCENDING',
     *     NotBefore?: \Aws\Api\DateTimeResult,
     *     NotAfter?: \Aws\Api\DateTimeResult,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string,
     *     ChimeBearer?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
