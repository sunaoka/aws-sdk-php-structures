<?php

namespace Sunaoka\Aws\Structures\Chime\ListVoiceConnectorGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 99> $MaxResults
 */
class ListVoiceConnectorGroupsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 99>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
