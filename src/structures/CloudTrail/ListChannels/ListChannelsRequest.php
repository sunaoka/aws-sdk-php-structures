<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListChannelsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
