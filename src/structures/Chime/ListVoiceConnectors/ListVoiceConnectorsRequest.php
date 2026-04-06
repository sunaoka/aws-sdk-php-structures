<?php

namespace Sunaoka\Aws\Structures\Chime\ListVoiceConnectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 99>|null $MaxResults
 */
class ListVoiceConnectorsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 99>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
